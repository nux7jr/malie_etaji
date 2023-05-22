<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index', ['path' => ['']]);
});
Route::get('/projects', function () {
    return view('projects.index');
});
Route::get('/about', function () {
    return view('about.index', ['path' => ['about', 'something']]);
});
Route::get('/house_card', function () {
    return view('cards.house-card');
});
