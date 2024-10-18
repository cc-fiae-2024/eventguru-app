<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome', ['events' => []]);
});

Route::get('/impressum', function () {
    return view('Impressum', ['Impressum' => Str::markdown(file_get_contents(resource_path('markdown/Impressum.md')))]);
});

Route::resource('/events', EventController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
