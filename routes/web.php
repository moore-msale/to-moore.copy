<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','MainController@index');

Route::get('/portfolio_queue', function () {
    return view('portfolio',['portfolios' => \App\Portfolio::all()]);
});
Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/bref', function () {
    return view('bref');
});
Route::get('/task', function () {
    return view('task');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/canvas', function () {
   return view('canvas');
});

Route::post('/mail', 'MailController@mail')->name('mail');
Route::post('/task', 'MailController@task')->name('task');
Route::post('/message', 'MailController@message')->name('message');

Route::group(['prefix' => 'yaya'], function () {
    Voyager::routes();
});
Route::get('/set-language/{lang}', 'LanguagesController@set')->name('set.language');
Route::get('/portfolio/{id}','PortfolioController@page')->name('portfolio');
