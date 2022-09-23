<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\flightdummies;
use Illuminate\Support\Str;
class Dredtickets extends Component
{
  public $dummy;
  public $randomshit;

  public function mount($id)
  {
    $this->randomshit=Str::upper(Str::random(13));
    $this->dummy = flightdummies::select('*')->where('id',$id)->get();
  }
    public function render()
    {
        return view('livewire.page.dredtickets')
        ->extends('layouts.owticktworound')
        ->section('content');
    }
}
