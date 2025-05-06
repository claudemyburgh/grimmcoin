<?php

namespace App\Livewire\Pages;

use Illuminate\View\View;
use Livewire\Component;
use Log;

class BuyCoinPageView extends Component
{

    protected $listeners = ['solana-payment-success' => 'handleSuccess'];

    public function handleSuccess($payload)
    {
        // Save TX ID, update DB, give tokens, etc.
        Log::info('Solana TX ID: ' . $payload['txid']);
    }


    public function render(): View
    {
        return view('livewire.pages.buy-coin-page-view');
    }
}
