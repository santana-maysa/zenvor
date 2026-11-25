<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'benefits' => config('zenvor.benefits'),
        'features' => config('zenvor.features'),
        'steps' => config('zenvor.steps'),
        'plans' => config('zenvor.plans'),
        'faqs' => config('zenvor.faqs'),
    ]);
});
