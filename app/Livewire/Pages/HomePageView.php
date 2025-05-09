<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Crypt')]
class HomePageView extends Component
{
    public function render()
    {
        return view('pages.home-page-view');
    }
}
