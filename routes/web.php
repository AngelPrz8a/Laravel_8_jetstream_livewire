<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
| -------------------------------------------
| Para visualizar los estilos de jetstream 
| -------------------------------------------
| 
| php artisan vendor:publish 
|
| seleccionar el componente que se desea ver y fin
*/

Route::get('/',[PageController::class, "home"])->name("home");
Route::get('course/{course:slug}',[PageController::class, "course"])->name("course");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
