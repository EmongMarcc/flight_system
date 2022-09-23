<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\flightdummies;
class Ftemplates extends Component
{
  public $dummy;

    public function mount()
    {
      $this->dummy = flightdummies::select('*')->orderBy('id','desc')->get();
    }
    public function render()
    {
        return view('livewire.page.ftemplates')
        ->extends('layouts.home')
        ->section('content');
    }
}
