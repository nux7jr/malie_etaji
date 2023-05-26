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
    return view('projects.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/projects', 'name' => 'Проекты'],
    ]]);
});
Route::get('/projects/{id}', function ($id) {

    return view('project-item.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/projects', 'name' => 'Проекты'],
        '3' => ['path' => $id, 'name' => 'curr ID or name'],
    ]]);
});

Route::get('/about/technologies', function () {
    return view('technologies.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/about', 'name' => 'О нас'],
        '2' => ['path' => '/technologies', 'name' => 'Технологии']
    ]]);
});
Route::get('/about', function () {
    return view('about.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/about', 'name' => 'О нас'],
    ]]);
});
Route::get('/house_card', function () {
    return view('cards.house-card');
});
