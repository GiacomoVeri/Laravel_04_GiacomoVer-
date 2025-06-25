<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutUsController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/articles', [ArticleController::class, 'allArticles'])->name('articles.all');
Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about');