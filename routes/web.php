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
    
    $data = [
        'name' => 'Davide',
        'surname' => 'Rossi'
    ];

    return view('home', compact('data'));
})->name('home');

Route::get('/email', function () {
    
    $email = 'email@email.com';

    return view('email', compact('email'));
})->name('email');

Route::get('/age', function () {
    
    $age = 27;

    return view('age', compact('age'));
})->name('age');

Route::get('/address', function () {
    
    $address = 'Via Alberoni, 9';

    return view('address', compact('address'));
})->name('address');
