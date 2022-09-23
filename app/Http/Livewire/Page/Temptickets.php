<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\flightdummies;
class Temptickets extends Component
{
  public $dummy;
  public $j = 0,$dataplace = ['yf','y11'],$datatime = ['y10','y12'];
  public $p = 0,$dataplacea = ['y18','y1a'],$datatimea = ['y19','y1b'];
    public function mount($id)
    {
      $this->dummy = flightdummies::select('*')->where('id',$id)->get();
    }
    public function render()
    {
        return view('livewire.page.temptickets')
        ->extends('layouts.flight')
        ->section('content');
    }
}
