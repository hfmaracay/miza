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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/institucion', function() {
	return view('web.institucion');
})->name('institucion');

Route::get('/equipo', function() {
	return view('web.equipo');
})->name('equipo');

Route::get('/contacto', function() {
	return view('web.contacto');
})->name('contacto');

Route::get('/admin/equipo','Admin\TeamController@index')->name('admin.team');
Route::get('/admin/equipo/agregar','Admin\TeamController@create')->name('admin.team.create');
Route::post('/admin/equipo/agregar','Admin\TeamController@store')->name('admin.team.store');
Route::get('/admin/equipo/{team}/editar','Admin\TeamController@edit')->name('admin.team.edit')
->where('team', '[0-9]+');
Route::put('/admin/equipo/{team}/editar','Admin\TeamController@update')->name('admin.team.update')
->where('team', '[0-9]+');
Route::patch('/admin/equipo/{team}/eliminar','Admin\TeamController@delete')->name('admin.team.trash')
->where('team', '[0-9]+');
Route::get('/admin/equipo/eliminado','Admin\TeamController@trashed')->name('admin.team.trashed');
Route::get('/admin/{id}/restaurar','Admin\TeamController@restore')->name('admin.team.restore')
->where('id','[0-9]+');
Route::delete('/admin/equipo/{id}/eliminado','Admin\TeamController@destroy')->name('admin.team.destroy')->where('id', '[0-9]+');