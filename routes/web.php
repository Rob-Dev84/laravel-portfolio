<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;

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

// Route::group([
//     'prefix' => '{lang}',
//     'where' => ['lang', '[a-zA-Z]{2}']
// ], function () {

//     Route::get('/', function () {
//         return view('home');
//     })->name('home');

    
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/contact/submit', [ContactController::class, 'submit']);

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => LanguageController::class, 'switchLang']);


