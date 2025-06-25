<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
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
      ],
      [
         'id' => 4,
         'title' => 'Sicurezza in PHP: best practices',
         'description' => 'Come scrivere codice PHP sicuro e prevenire le vulnerabilità comuni come SQL Injection e XSS.',
        'image' => 'https://picsum.photos/400',
         'author' => 'Elisa Greco'
      ],
      [
         'id' => 5,
         'title' => 'PHP 8.3: le nuove funzionalità',
         'description' => 'Esplora le novità introdotte in PHP 8.3 e come possono migliorare le tue applicazioni.',
         'image' => 'https://picsum.photos/400',
         'author' => 'Andrea Russo'
      ],
      [
         'id' => 6,
         'title' => 'Creare un blog con PHP e MySQL',
         'description' => 'Un tutorial passo-passo per realizzare un blog dinamico utilizzando PHP e un database MySQL.',
         'image' => 'https://picsum.photos/400',
         'author' => 'Giulia Ferri'
      ],
      [
         'id' => 7,
         'title' => 'PHP e API REST: integrazione facile',
         'description' => 'Come creare e consumare API REST utilizzando PHP per connettere applicazioni moderne.',
         'image' => 'https://picsum.photos/400',
         'author' => 'Fabio De Luca'
      ],
      [
         'id' => 8,
         'title' => 'Template engines in PHP: Blade vs Twig',
         'description' => 'Un confronto tra i motori di template più popolari nel mondo PHP.',
         'image' => 'https://picsum.photos/400',
         'author' => 'Martina Sala'
      ],
      [
         'id' => 9,
         'title' => 'Ottimizzazione delle prestazioni in PHP',
         'description' => 'Tecniche per migliorare la velocità e l’efficienza del tuo codice PHP.',
         'image' => 'https://picsum.photos/400',
         'author' => 'Stefano Bianchi'
      ],
      [
         'id' => 10,
         'title' => 'Come gestire gli errori in PHP',
         'description' => 'Guida alla gestione degli errori e al debugging in PHP per uno sviluppo più robusto.',
         'image' => 'https://picsum.photos/400',
         'author' => 'Chiara Moretti'
      ],
      [
         'id' => 11,
         'title' => 'Ti spiego come vorrei ammazzarmi',
         'description' => 'Tecniche per migliorare la velocità di apprendimento',
         'image' => 'https://picsum.photos/400',
         'author' => 'Stefano Bianchi'
      ],
      [
         'id' => 12,
         'title' => 'Ottimizzazione delle sinapsi',
         'description' => 'Tecniche per migliorare la velocità e l’efficienza del tuo cervello',
         'image' => 'https://picsum.photos/400',
         'author' => 'Stefano Bianchi'
      ]
   ];


   public function allArticles()
   {
      $articles = $this->articles;
       
      return view('articles', compact('articles'));
   }
}
