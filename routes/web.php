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
        'Не выбрано',
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
        'Не выбрано',
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
        'Не выбрано',
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
        'Не выбрано',
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
Route::get('/mortgage/capital', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "capital"]);
});
Route::get('/mortgage/tranches', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "tranches"]);
});

Route::get('/mortgage/installment', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "installment"]);
});

Route::get('/mortgage/military', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "military"]);
});
Route::get('/mortgage/subsidies', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "subsidies"]);
});
Route::get('/mortgage/trade', function () {
    return view('mortgage.index', ["paths" => [
        '0' => ['path' => '/', 'name' => 'Главная'],
        '1' => ['path' => '/mortgage', 'name' => 'Ипотека'],
    ], "filter" => "trade"]);
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
