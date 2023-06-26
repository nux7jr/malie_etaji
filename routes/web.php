<?php

use App\Http\Controllers\SendFormController;
use App\Models\City;
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
use App\Content\main\Articles;

Route::fallback(function ($domain) {
    return view('errors.404')->with('city', City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain));
});

Route::group(['domain' => '{subdomain}.{domain}.ru'], function () {
    routeList();
});
Route::group(['domain' => '{domain}.ru'], function () {
    routeList();
});
function routeList(): void
{
    Route::get('/', function ($domain) {
        return view('home.index')->with('city', City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain));
    });


    Route::get('/quiz', function ($domain) {
        return view('landings.quiz.index')->with('city', City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain));
    });

    // projects
    Route::get('/projects', function ($domain) {
        return view('projects.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/projects', 'name' => 'Проекты'],
            ],
            'projects' => HousesInfo::$card_elements,
            'house_setting' => [
                'Все',
                'Все',
                'Одноэтажные',
                'Двухэтажные',
                'Барны'
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/projects/barn', function ($domain) {
        return view('projects.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/projects', 'name' => 'Проекты'],
            ],
            'projects' => HousesInfo::getCategoryByName(__('Барны')),
            'house_setting' => [
                'Барны',
                'Все',
                'Одноэтажные',
                'Двухэтажные',
                'Барны',
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/projects/single', function ($domain) {
        return view('projects.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/projects', 'name' => 'Проекты'],
            ],
            'projects' => HousesInfo::getCategoryByName(__('Одноэтажные')),
            'house_setting' => [
                'Одноэтажные',
                'Все',
                'Двухэтажные',
                'Барны',
                'Одноэтажные'
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/projects/double', function ($domain) {
        return view('projects.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/projects', 'name' => 'Проекты'],
            ],
            'projects' => HousesInfo::getCategoryByName(__('Двухэтажные')),
            'house_setting' => [
                'Двухэтажные',
                'Одноэтажные',
                'Все',
                'Барны',
                'Двухэтажные'
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });

    // mortgage

    Route::get('/mortgage', function ($domain) {
        return view('mortgage.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/mortgage', 'name' => 'Ипотека'],
            ],
            'filter' => 'family',
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/mortgage/family', function ($domain) {
        return view('mortgage.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/mortgage', 'name' => 'Ипотека'],
            ],
            'filter' => 'family',
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/mortgage/gos', function ($domain) {
        return view('mortgage.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/mortgage', 'name' => 'Ипотека'],
            ],
            'filter' => 'gos',
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/mortgage/it', function ($domain) {
        return view('mortgage.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/mortgage', 'name' => 'Ипотека'],
            ],
            'filter' => 'it',
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/mortgage/away', function ($domain) {
        return view('mortgage.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/mortgage', 'name' => 'Ипотека'],
            ],
            'filter' => 'away',
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/mortgage/village', function ($domain) {
        return view('mortgage.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/mortgage', 'name' => 'Ипотека'],
            ],
            'filter' => 'village',
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });



    Route::get('/projects/{id}', function ($domain, $subdomainOrId, $idOrNull = null) {
        $arrayInfo = HousesInfo::$card_elements;
        $id = $idOrNull === null ? $subdomainOrId : $idOrNull;
        $infoInner = $arrayInfo[$id] ?? $arrayInfo[0];
        return view('project-item.index')->with([
            'paths' => [
                '0' => ['path' => '/', 'name' => 'Главная'],
                '1' => ['path' => '/projects', 'name' => 'Проекты'],
                '3' => ['path' => $id, 'name' => $infoInner['name']],
            ],
            'info' => $infoInner,
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/about/technologies', function ($domain) {
        return view('technologies.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/about', 'name' => 'О нас'],
                ['path' => '/technologies', 'name' => 'Технологии']
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/about', function ($domain) {
        return view('about.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/about', 'name' => 'О нас'],
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/house_card', function ($domain) {
        return view('cards.house-card')->with([
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });


    // blog
    Route::get('/blog', function ($domain) {
        return view('blog.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/blog', 'name' => 'Блог'],
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });

    Route::get('/blog/{id}', function ($domain, $subdomainOrId, $idOrNull = null) {
        $articlesAll = Articles::$card_elements;
        $id = $idOrNull === null ? $subdomainOrId : $idOrNull;
        $articlesInfo = $articlesAll[$id] ?? $articlesAll[1];
        return view('blog-item.index')->with([
            'paths' => [
                ['path' => '/', 'name' => 'Главная'],
                ['path' => '/blog', 'name' => 'Блог'],
                ['path' => $id, 'name' => $articlesInfo['title']],
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
            'articlesInfo' => $articlesInfo,
        ]);
    });
    Route::get('/contacts', function ($domain) {
        return view('contacts.index')->with([
            'paths' => [
                '0' => ['path' => '/', 'name' => 'Главная'],
                '1' => ['path' => '/contacts', 'name' => 'Контакты'],
            ],
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });
    Route::get('/menu', function ($domain) {
        return view('menu.index')->with([
            'city' => City::getAllCitiesWithBaseCurrentSubdomain(request()->route()->parameter('subdomain') ?? $domain),
        ]);
    });

    Route::post('send_modal', [SendFormController::class, 'sendForm']);
}
