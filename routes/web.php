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
    return view('index');
})->name('index');

Route::get('/planocurricular', function () {
    return view('planocurricular');
})->name('planocurricular');

Route::get('/projetos', function () {
    return view('projetos');
})->name('projetos');

Route::get('/contactos', function () {
    return view('contactos');
})->name('contactos');
