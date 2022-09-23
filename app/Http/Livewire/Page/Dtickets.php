<?php

namespace App\Http\Livewire\Page;

use App\Models\flightdummies;
use Livewire\Component;

class Dtickets extends Component
{
  public $dummy;

  public function mount($id)
  {
    $this->dummy = flightdummies::select('*')->where('id',$id)->get();
  }

    public function render()
    {
        return view('livewire.page.dtickets')
        ->extends('layouts.dtick')
        ->section('content');
    }
}
