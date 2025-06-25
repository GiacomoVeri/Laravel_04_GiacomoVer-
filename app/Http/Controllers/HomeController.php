<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $articles = [
        [
            'id' => 1,
            'title' => 'Introduzione a PHP: La guida per principianti',
            'description' => 'Scopri le basi del linguaggio PHP e come iniziare a sviluppare applicazioni web dinamiche.',
            'image' => 'https://picsum.photos/400',
            'author' => 'Luca Neri'
        ],
        [
            'id' => 2,
            'title' => 'Laravel: il framework PHP moderno',
            'description' => 'Una panoramica su Laravel, uno dei framework più usati per lo sviluppo web in PHP.',
            'image' => 'https://picsum.photos/400',
            'author' => 'Sara Conti'
        ],
        [
            'id' => 3,
            'title' => 'PHP vs JavaScript: differenze e usi',
            'description' => 'Un confronto tra PHP e JavaScript per aiutarti a scegliere il linguaggio giusto per il tuo progetto.',
            'image' => 'https://picsum.photos/400',
            'author' => 'Marco Rinaldi'
        ]
    ];


    public function home()
    {
        $articles = $this->articles;

        return view('home', compact('articles'));
    }
}
