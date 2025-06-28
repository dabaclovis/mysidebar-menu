<?php

use App\Livewire\Blogs\Article;
use App\Livewire\Blogs\Create;
use Illuminate\Support\Facades\Route;

Route::get('articles', Article::class)->name('articles.index');
Route::get('artcticles/create', Create::class)->name('articles.create');
