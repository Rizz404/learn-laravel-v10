<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $title =  'Chinese Meal';
        $dictators = [
            [
                'title' => 'Sadam Hussein',
                'img' => 'https://awsimages.detik.net.id/community/media/visual/2016/07/12/afb597a8-1dbf-41c6-9f74-a4e1f7670ddf.jpg',
                'quote' => 'You Americans, you treat the Third World the way an Iraqi peasant treats his new bride.',
            ], [
                'title' => 'Adolf Hitler',
                'img' => 'https://cdn.britannica.com/58/129958-050-C3FE2DD2/Adolf-Hitler-1933.jpg',
                'quote' => 'You Americans, you treat the Third World the way an Iraqi peasant treats his new bride.',
            ],
            [
                'title' => 'Joseph Stalin',
                'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/StalinCropped1943%28b%29.jpg/220px-StalinCropped1943%28b%29.jpg',
                'quote' => 'You Americans, you treat the Third World the way an Iraqi peasant treats his new bride.',
            ]

        ];
        // * Cara lama
        // return view('home', [
        //     'title' => $title,
        //     'names' => $names,
        // ]);
        return view('home', compact('title', 'dictators',));
    }
}
