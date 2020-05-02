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


Route::view('/', 'home')->name('home');
Route::view('contacto', 'contacto')->name('contacto');
Route::resource('personas', 'PersonaController')->names('personas');


// Route::get('empresa','PersonaController@index') -> name('empresa.index');
// Route::get('empresa/crear','PersonaController@create') ->name('empresa.create');
// Route::get('empresa/{nPerCodigo}/edit','PersonaController@edit') ->name('empresa.edit');
// Route::patch('empresa/{nPerCodigo}','PersonaController@update') ->name('empresa.update');
// Route::post('empresa','PersonaController@store') ->name('empresa.store');
// Route::get('empresa/{nPerCodigo}','PersonaController@show') ->name('empresa.show');
// Route::delete('empresa/{personas}','PersonaController@destroy') ->name('empresa.destroy');
Route::post('contacto', 'ContactoController@store');
Route::view('login','login')->name('login');


Auth::routes(['register'=>false]);

//Route::get('/home', 'HomeController@index')->name('home');
