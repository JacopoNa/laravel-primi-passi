<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $team = [
        'name' => 'Inter',
        'coach' => 'Simone Inzaghi',
        'stadium' => 'San Siro',
        'colors' => 'Nero e Azzurro',
    ];

    return view('home', $team);
})->name('home');

Route::get('/staff', function () {
    return view('staff');
})->name('staff');

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::get('/info', function () {
    return view('info');
})->name('info');
