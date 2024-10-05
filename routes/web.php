<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/whyus', function () {
    return view('whyus');
});

use App\Models\Destination;

Route::get('/destinations', function () {
    return view('destinations');
})->name('destinations');

