<?php

namespace App\Helpers;

use Illuminate\Support\Collection;

class Menu
{
    public static function get(): Collection
    {
        $items = [
            [
                'name' => 'Crypt',
                'route' => 'home',
                'title' => 'Home',
                'visible' => true,
            ],
            [
                'name' => 'Pledge Your Wallet',
                'route' => 'buy-coin',
                'title' => 'buy-coins',
                'visible' => true,
            ],
            [
                'name' => 'Our Origins',
                'route' => 'home',
                'title' => 'About Us',
                'visible' => false,
            ],
            [
                'name' => 'Scrolls',
                'route' => 'home',
                'title' => 'Blog',
                'visible' => false,
            ],
            [
                'name' => 'Reap In',
                'route' => 'home',
                'title' => 'Login',
                'visible' => true,
            ],
            [
                'name' => 'Join the Cult',
                'route' => 'home',
                'title' => 'Register',
                'visible' => true,
            ],
        ];

        return collect($items)->map(function ($item) {
            return (object)$item;
        });
    }
}
