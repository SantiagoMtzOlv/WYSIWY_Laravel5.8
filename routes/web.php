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

Route::get('/', 'ActividadController@index');
Route::get('/crear', 'ActividadController@crear');
Route::post('/post-act', 'ActividadController@store');
Route::get('/editar/{id}', 'ActividadController@editar');
Route::post('/editar/{id}', 'ActividadController@update');
Route::delete('/borrar/{id}', 'ActividadController@destroy');
/*
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

*/
