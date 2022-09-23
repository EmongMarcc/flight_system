<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Homes extends Component
{
    public function render()
    {
        return view('livewire.page.homes')
        ->extends('layouts.Home')
        ->section('content');
    }
}
