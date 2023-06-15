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



use App\Content\main\HousesInfo;

Route::get('/', function () {
    return view('home.index');
});

// projects
Route::get('/projects', function () {
    return view('projects.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/projects', 'name' => 'Проекты'],
    ], 'projects' => HousesInfo::$card_elements], ["house_setting" => [
        'Не выбранно',
        'Все',
        'Одноэтажные',
        'Двухэтажные',
        'Барны'
    ]]);
});
Route::get('/projects/barn', function () {
    return view('projects.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/projects', 'name' => 'Проекты'],
    ], 'projects' => HousesInfo::$card_elements], ["house_setting" => [
        'Барны',
        'Не выбранно',
        'Все',
        'Одноэтажные',
        'Двухэтажные',
    ]]);
});
Route::get('/projects/single', function () {
    return view('projects.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/projects', 'name' => 'Проекты'],
    ], 'projects' => HousesInfo::$card_elements], ["house_setting" => [
        'Одноэтажные',
        'Не выбранно',
        'Все',
        'Двухэтажные',
        'Барны',
    ]]);
});
Route::get('/projects/double', function () {
    return view('projects.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/projects', 'name' => 'Проекты'],
    ], 'projects' => HousesInfo::$card_elements], ["house_setting" => [
        'Двухэтажные',
        'Одноэтажные',
        'Все',
        'Барны',
        'Не выбранно',
    ]]);
});

// mortgage

Route::get('/mortgage', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "family"]);
});
Route::get('/mortgage/family', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "family"]);
});
Route::get('/mortgage/gos', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "gos"]);
});
Route::get('/mortgage/it', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "it"]);
});
Route::get('/mortgage/away', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "away"]);
});
Route::get('/mortgage/village', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "village"]);
});



Route::get('/projects/{id}', function ($id) {
    $arrayInfo = HousesInfo::$card_elements;
    $infoInner = $arrayInfo[$id] ?? $arrayInfo[1];

    return view('project-item.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/projects', 'name' => 'Проекты'],
        '3' => ['path' => $id, 'name' => $infoInner['name']],
    ], 'info' => $infoInner]);
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


// blog
Route::get('/blog', function () {
    return view('blog.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/blog', 'name' => 'Блог'],
    ]]);
});

Route::get('/blog/{id}', function ($id) {
    return view('blog-item.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/blog', 'name' => 'Блог'],
        '2' => ['path' => $id, 'name' => 'Название статьи'],
    ]]);
});
Route::get('/contacts', function () {
    return view('contacts.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/contacts', 'name' => 'Контакты'],
    ]]);
});
Route::get('/menu', function () {
    return view('menu.index');
});
