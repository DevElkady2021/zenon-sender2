<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\SubDirectController;
use App\Http\Controllers\MainDirectController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    return view('welcome');
})->name('welcome');


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth:web' ]
    ], function($route){ 
        Route::get('/', function () {
            return view('home');
        });
    
        Route::get('/setting', function () {
            return view('Pages.setting');
        })->name('setting');

        Route::get('/add', function () {
            return view('Pages.add');
        })->name('add');

        Route::get('/tracking', function () {
            return view('Pages.tracking');
        })->name('tracking');

        Route::get('/search', function () {
            return view('Pages.search');
        })->name('search');

        Route::get('/add-order', function () {
            return view('Pages.addOrder');
        })->name('addOrder');

        Route::get('/orders', function () {
            return view('Pages.orders');
        })->name('orders');

        Route::get('/balance', function () {
            return view('Pages.balance');
        })->name('balance');

    });



    Route::get('lang/set/{lang}', [HomeController::class, 'set'])->name('language.set');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
