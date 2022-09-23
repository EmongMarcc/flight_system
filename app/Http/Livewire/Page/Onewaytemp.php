<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\flightoneways;
class Onewaytemp extends Component
{
  public $dummy;

    public function mount()
    {
      $this->dummy = flightoneways::select('*')->orderBy('id','desc')->get();
    }
    public function render()
    {
        return view('livewire.page.onewaytemp')
        ->extends('layouts.home')
        ->section('content');
    }
}
