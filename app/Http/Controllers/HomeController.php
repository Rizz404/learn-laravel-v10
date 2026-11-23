<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $lessons = [
            [
                'title' => 'Named routes',
                'description' => 'Connect the home, product, and cart pages using named Laravel routes.',
                'concept' => 'Route::get()',
                'url' => route('product'),
            ],
            [
                'title' => 'Blade components',
                'description' => 'Reuse a shared layout and navigation across server-rendered views.',
                'concept' => 'Components & slots',
                'url' => route('keranjang'),
            ],
            [
                'title' => 'Controller data',
                'description' => 'Pass this lesson collection from a controller and render it with a Blade loop.',
                'concept' => 'Controllers & @foreach',
                'url' => url('/login'),
            ],
        ];

        return view('home', compact('lessons'));
    }
}
