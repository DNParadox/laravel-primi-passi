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
        'name' => 'Pippo',
        'lastname' => 'Baudo',
        'text' => 'Lorem Ipsum'

    ];

    return view('home', $data);

})->name('home');


Route::get('/about', function () {
    $data = [
        'text1' => 'Testo piccolo',
        'text2' => 'Testo grandissimo',
        'text3' => 'Lorem Ipsum'

    ];
    return view('about',$data);
})->name('about');