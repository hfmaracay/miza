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

/*
|--------------------------------------------------------------------------
| Web Routes Web
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'] , function() {
	Route::get('/password', 'Web\ProfileController@passwordView')->name('password');
	Route::put('/password/update','Web\ProfileController@updatePassword')->name('passwordUpdate');
	// Profile
	Route::get('/profile','Web\ProfileController@show')->name('profile');
	Route::put('/profile/update','Web\ProfileController@update')->name('profileUpdate');
});

/*
|--------------------------------------------------------------------------
| Web Routes Admin
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'prefix' => '/admin'] , function() {
  // Users
  Route::get('/usuarios', 'Admin\UserController@index')->name('adminUsers');
  Route::get('/usuarios/{user}', 'Admin\UserController@show')->name('adminUsers.show')
        ->where('user', '[0-9]+');
  Route::put('/usuarios/{user}/update', 'Admin\UserController@update')->name('adminUsers.update')
        ->where('user', '[0-9]+');
  Route::get('/usuarios/{user}/password', 'Admin\UserController@password')->name('adminUsers.password')
        ->where('user', '[0-9]+');
  Route::put('/usuarios/{user}/password', 'Admin\UserController@updatePassword')
        ->name('adminUsers.updatePassword')->where('user', '[0-9]+');
	Route::put('/usuarios/{id}/rol', 'Admin\UserController@rol')->name('adminUsers.rol')->where('id', '[0-9]+');
	Route::get('/usuarios/trashed', 'Admin\UserController@trashed')->name('adminUsers.trashed');
  Route::patch('/usuarios/{user}/trash', 'Admin\UserController@trash')->name('adminUsers.trash')
        ->where('user', '[0-9]+');
  Route::get('/usuarios/{id}/restore', 'Admin\UserController@restore')->name('adminUsers.restore')
        ->where('id', '[0-9]+');
  Route::delete('/usuarios/{id}/destroy', 'Admin\UserController@destroy')->name('adminUsers.destroy')
        ->where('id', '[0-9]+');
  
  // Contents
  Route::get('/contenidos', 'Admin\ContentController@index')->name('adminContents');
  
  // Teams
  Route::get('/equipo', 'Admin\TeamController@index')->name('adminTeams');
  Route::get('/equipo/agregar','Admin\TeamController@create')->name('adminTeams.create');
  Route::post('/equipo/agregar','Admin\TeamController@store')->name('adminTeams.store');
  Route::get('/equipo/{team}/editar','Admin\TeamController@edit')->name('adminTeams.edit')
        ->where('team', '[0-9]+');
  Route::put('/equipo/{team}/editar','Admin\TeamController@update')->name('adminTeams.update')
        ->where('team', '[0-9]+');
  Route::patch('/equipo/{team}/eliminar','Admin\TeamController@delete')->name('adminTeams.trash')
        ->where('team', '[0-9]+');
  Route::get('/equipo/eliminado','Admin\TeamController@trashed')->name('adminTeams.trashed');
  Route::get('/equipo/{id}/restaurar','Admin\TeamController@restore')->name('adminTeams.restore')
        ->where('id','[0-9]+');
  Route::delete('/admin/equipo/{id}/eliminado','Admin\TeamController@destroy')->name('adminTeams.destroy')
        ->where('id', '[0-9]+');
  
  // News
  Route::get('/noticias', 'Admin\NewsController@index')->name('adminNews');
  
  // Messages
  Route::get('/mensajes', 'Admin\MessageController@index')->name('adminMessages');
});
