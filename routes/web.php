<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Pages\HomePageView::class)->name('home');
