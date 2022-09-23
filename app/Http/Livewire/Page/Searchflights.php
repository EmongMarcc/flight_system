<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
Use Carbon\Carbon;
use App\Models\flightdummies;
use Illuminate\Support\Str;
use Storage;

class Searchflights extends Component
{
  public $from = 'DXB',$to = 'MNL',$date,$adult=1,$child=0,$infant=0,$type = 'economy';
    public $returnresponse,$returnerr,$returndate;
    public $response,$err,$mindate;
    public $listerr;
    public $listresponse;
    public $pnr_number;
    public $booking_ref;
    public $trip_id;
    public $general_info;
    public $arrive_info;
    public $depart_info;
    public $fullname;
    public $layover_depart;
    public $layover_arrive;
    public $layover_namedepart;
    public $layover_namearrive='layover_namearrive';
    public $randomshit;

    public bool $loadData = false;
    public $readyToLoad = false;
    public function loadPosts()
    {
     $this->readyToLoad = true;
    }
  public function mount(){
    $this->randomshit=Str::upper(Str::random(6));
    $this->pnr_number=Str::upper(Str::random(7));
    $this->trip_id = 'AGN'.random_int(1000, 9999).Str::upper(Str::random(9)).random_int(1000, 9999);
    $this->booking_ref = $this->randomshit.'-'.random_int(10000, 99999);
    $this->mindate = Carbon::now()->format('Y-m-d');
    $this->date = Carbon::now()->format('Y-m-d');
    $this->returndate = Carbon::now()->format('Y-m-d');
    // $this->searchflights();
    $this->listresponse = Storage::disk('local')->get('airports.json');

    // take off the comment to run
    $this->loadData = true;
    }
    public function addPost(){
      flightdummies::create([
        'pnr_number' => $this->pnr_number,
        'booking_ref' => $this->booking_ref,
        'trip_id' => $this->trip_id,
        'general_info' => $this->general_info,
        'arrive_info' => $this->arrive_info,
        'depart_info' => $this->depart_info,
        'fullname' => $this->fullname,
        'layover_depart' => $this->layover_depart,
        'layover_arrive' => $this->layover_arrive,
        'layover_namedepart' => $this->layover_namedepart,
        'layover_namearrive' => $this->layover_namearrive,
      ]);
          $this->resetInput();
    }
    public function resetInput(){
    $this->pnr_number = null;
    $this->booking_ref = null;
    $this->trip_id = null;
    $this->general_info = null;
    $this->arrive_info = null;
    $this->depart_info = null;
    $this->fullname = null;
    }
  public function searchflights(){
    $curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://flight-fare-search.p.rapidapi.com/v2/flight/?from=".$this->from."&to=".$this->to."&date=".$this->date."&adult=".$this->adult."&type=".$this->type."&currency=AED",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: flight-fare-search.p.rapidapi.com",
		"X-RapidAPI-Key: ".config('app.flightfare')
	],
]);
    $this->response = curl_exec($curl);
    $this->err = curl_error($curl);

    curl_close($curl);

    $this->returnflights();
    }
  public function returnflights(){
    $curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://flight-fare-search.p.rapidapi.com/v2/flight/?from=".$this->to."&to=".$this->from."&date=".$this->returndate."&adult=".$this->adult."&type=".$this->type."&currency=AED",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: flight-fare-search.p.rapidapi.com",
		"X-RapidAPI-Key: ".config('app.flightfare')
	],
]);
    $this->returnresponse = curl_exec($curl);
    $this->returnerr = curl_error($curl);
    curl_close($curl);

    $this->general_info = json_encode(json_decode($this->response)->searchData ?? []);

    }
    public function layoverdepart($id,$idd){
      $curl = curl_init();
      curl_setopt_array($curl, [
      	CURLOPT_URL => "https://airport-info.p.rapidapi.com/airport?iata="."$id",
      	CURLOPT_RETURNTRANSFER => true,
      	CURLOPT_FOLLOWLOCATION => true,
      	CURLOPT_ENCODING => "",
      	CURLOPT_MAXREDIRS => 10,
      	CURLOPT_TIMEOUT => 30,
      	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      	CURLOPT_CUSTOMREQUEST => "GET",
      	CURLOPT_HTTPHEADER => [
      		"X-RapidAPI-Host: airport-info.p.rapidapi.com",
      		"X-RapidAPI-Key: ".config('app.flightfare')
      	],
      ]);

      $this->layover_depart = curl_exec($curl);
      $this->layovernamedepart($idd);
    }
    public function layovernamedepart($idd){
      $curl = curl_init();

      curl_setopt_array($curl, [
      	CURLOPT_URL => "https://aviation-reference-data.p.rapidapi.com/airline/"."$idd",
      	CURLOPT_RETURNTRANSFER => true,
      	CURLOPT_FOLLOWLOCATION => true,
      	CURLOPT_ENCODING => "",
      	CURLOPT_MAXREDIRS => 10,
      	CURLOPT_TIMEOUT => 30,
      	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      	CURLOPT_CUSTOMREQUEST => "GET",
      	CURLOPT_HTTPHEADER => [
      		"X-RapidAPI-Host: aviation-reference-data.p.rapidapi.com",
      		"X-RapidAPI-Key: ".config('app.flightfare')
      	],
      ]);

      $this->layover_namedepart = curl_exec($curl);
    }
    public function layoverarrive($id,$idd){
      $curl = curl_init();
      curl_setopt_array($curl, [
      	CURLOPT_URL => "https://airport-info.p.rapidapi.com/airport?iata="."$id",
      	CURLOPT_RETURNTRANSFER => true,
      	CURLOPT_FOLLOWLOCATION => true,
      	CURLOPT_ENCODING => "",
      	CURLOPT_MAXREDIRS => 10,
      	CURLOPT_TIMEOUT => 30,
      	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      	CURLOPT_CUSTOMREQUEST => "GET",
      	CURLOPT_HTTPHEADER => [
      		"X-RapidAPI-Host: airport-info.p.rapidapi.com",
      		"X-RapidAPI-Key: ".config('app.flightfare')
      	],
      ]);
      $this->layover_arrive = curl_exec($curl);
      $this->layovernamearrive($idd);
    }
    public function layovernamearrive($idd){
      $curl = curl_init();

      curl_setopt_array($curl, [
      	CURLOPT_URL => "https://aviation-reference-data.p.rapidapi.com/airline/"."$idd",
      	CURLOPT_RETURNTRANSFER => true,
      	CURLOPT_FOLLOWLOCATION => true,
      	CURLOPT_ENCODING => "",
      	CURLOPT_MAXREDIRS => 10,
      	CURLOPT_TIMEOUT => 30,
      	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      	CURLOPT_CUSTOMREQUEST => "GET",
      	CURLOPT_HTTPHEADER => [
      		"X-RapidAPI-Host: aviation-reference-data.p.rapidapi.com",
      		"X-RapidAPI-Key: ".config('app.flightfare')
      	],
      ]);

      $this->layover_namearrive = curl_exec($curl);
    }
    public function render()
    {
        return view('livewire.page.searchflights',[
            'dummy' => $this->readyToLoad
                ? flightdummies::select('*')->orderBy('id','desc')->get()
                : [],
        ]);
    }
}
