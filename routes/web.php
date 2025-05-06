<?php

use App\Livewire\Pages\BuyCoinPageView;
use App\Livewire\Pages\HomePageView;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePageView::class)->name('home');
Route::get('/buy-coin', BuyCoinPageView::class)->name('buy-coin');
