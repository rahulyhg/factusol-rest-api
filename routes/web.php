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

Route::any('/', function() {
    return redirect(route('index'));
});

Route::get('/logs', [
    'as' => 'logs',
    'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index',
]);

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'Dashboard\DashboardController@Index',
    ]);
    Route::get('/auth/logout', [
        'as' => 'auth.logout',
        'uses' => 'Auth\WebController@getLogout'
    ]);
    Route::get('/logs', [
        'as' => 'logs',
        'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index',
    ]);
    Route::get('/changelog', [
        'as' => 'changelog',
        'uses' => 'Dashboard\DashboardController@getChangeLog'
    ]);
});

Route::group([
    'prefix' => 'admin',
    'middleware' => 'guest',
], function () {
    Route::get('/auth/login', [
        'as' => 'auth.login',
        'uses' => 'Auth\WebController@getLogin'
    ]);
    Route::post('/auth/login', 'Auth\WebController@postLogin');
});
