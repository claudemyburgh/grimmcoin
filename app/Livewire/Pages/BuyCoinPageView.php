<?php

namespace App\Livewire\Pages;

use Attestto\SolanaPhpSdk\SystemProgram;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Pledge your wallet')]
class BuyCoinPageView extends Component
{
  

    public function render(): View
    {
        return view('pages.buy-coin-page-view');
    }
}
