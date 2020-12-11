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
    $name = 'Pera';
    $age = 30;
    return view('welcome', compact('name', 'age'));
});

Route::get('/about', function () {
    echo "About Us";
    //return view('about');
});