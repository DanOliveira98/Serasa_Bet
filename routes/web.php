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


Auth::routes();
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::resource('parceiros.negativados', 'App\Http\Controllers\NegativadoController')->shallow();
Route::post('/negativados/busca', 'App\Http\Controllers\NegativadoController@searchByCpf')->name('buscas');
Route::resource('negativados.endereco', 'App\Http\Controllers\EnderecoController');
Route::resource('parceiros', 'App\Http\Controllers\ParceiroController')->shallow();
