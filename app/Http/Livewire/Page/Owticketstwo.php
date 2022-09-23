<?php

namespace App\Http\Livewire\Page;
use App\Models\flightoneways;
use Livewire\Component;
use Illuminate\Support\Str;
class Owticketstwo extends Component
{
  public $dummy;
  public $randomshit;

  public function mount($id)
  {
    $this->dummy = flightoneways::select('*')->where('id',$id)->get();
    $this->randomshit=Str::upper(Str::random(13));
  }
    public function render()
    {
        return view('livewire.page.owticketstwo')
        ->extends('layouts.owticktwo')
        ->section('content');
    }
}
