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
    return view('welcome');
});

Route::resource('/categories', 'CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


$appUrl = config('app.url');
$domain = parse_url($appUrl)['host'];
$tenantParam = config('tenant.route_param');


Route::domain("{{$tenantParam}}.son.laravel")->group(function(){
    Route::get('/test', function(){
        return 'Hello Word';
    });

    Route::prefix('/admin')->group(function(){
        Route::get('/', function(){
            return 'Admin';
        });
    });

    Route::prefix('/app')->group(function(){
        Route::get('/', function(){
            return 'App Multi Tenancy';
        });
    });
});
