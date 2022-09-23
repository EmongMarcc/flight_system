<?php

namespace App\Http\Livewire\Page;
use App\Models\flightoneways;
use Livewire\Component;


class Owtickets extends Component
{
  public $dummy;

  public function mount($id)
  {
    $this->dummy = flightoneways::select('*')->where('id',$id)->get();
  }
    public function render()
    {
        return view('livewire.page.owtickets')
        ->extends('layouts.owtick')
        ->section('content');
    }
}
