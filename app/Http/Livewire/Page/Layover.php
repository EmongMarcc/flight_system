<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Layover extends Component
{
    public function render()
    {
        return view('livewire.page.layover')
        ->extends('layouts.flight')
        ->section('content');
    }
}
