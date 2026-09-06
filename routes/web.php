<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
});

Route::get('/publication/{slug}', function ($slug) {
    return view('public.publication-detail', ['slug' => $slug]);
})->name('publication.show');
