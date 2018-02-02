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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home');

/*Route::get('/encuestas', function()
{
    return view('encuestas.index');
});
Route::get('/encuestas/ver/{id}', function()
{
    return view('encuestas.show', array('id'=>$id));
});
Route::get('/encuesta/crear', function()
{
    return view('encuestas.create');
});
Route::get('/encuesta/editar/{id}', function()
{
    return view('encuestas.edit', array('id'=>$id));
});
*/
Route::post('/encuestas/crear','EncuestasController@store');
Route::get('/encuestas','EncuestasController@index');
Route::get('/encuestas/crear','EncuestasController@create');
Route::get('/encuestas/{id}','EncuestasController@show');
//v2
//Route::resource('encuestas','EncuestasController');

