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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/institucion', function() {
	return view('web.institucion');
})->name('institution');

Route::get('/noticias')->name('news');
Route::get('/noticias/{$news}')->name('news.show')->where('news', '[0-9]+');

Route::get('/equipo', function() {
	return view('web.equipo');
})->name('team');

Route::get('/contacto', 'Web\MessageController@create')->name('contact');
Route::post('/contacto/agregar','Web\MessageController@store')->name('contact.store');

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
  Route::get('/usuarios/{user}/editar', 'Admin\UserController@edit')->name('adminUsers.edit')
        ->where('user', '[0-9]+');
  Route::put('/usuarios/{user}/editar', 'Admin\UserController@update')->name('adminUsers.update')
        ->where('user', '[0-9]+');
  Route::get('/usuarios/{user}/password', 'Admin\UserController@password')->name('adminUsers.password')
        ->where('user', '[0-9]+');
  Route::put('/usuarios/{user}/password', 'Admin\UserController@updatePassword')
        ->name('adminUsers.updatePassword')->where('user', '[0-9]+');
	Route::put('/usuarios/{id}/rol', 'Admin\UserController@rol')->name('adminUsers.rol')->where('id', '[0-9]+');
	Route::get('/usuarios/papelera', 'Admin\UserController@trashed')->name('adminUsers.trashed');
  Route::patch('/usuarios/{user}/eliminar', 'Admin\UserController@delete')->name('adminUsers.trash')
        ->where('user', '[0-9]+');
  Route::get('/usuarios/{id}/restaurar', 'Admin\UserController@restore')->name('adminUsers.restore')
        ->where('id', '[0-9]+');
  Route::delete('/usuarios/{id}/destruir', 'Admin\UserController@destroy')->name('adminUsers.destroy')
        ->where('id', '[0-9]+');
  
  // Contents
  Route::get('/contenidos', 'Admin\ContentController@index')->name('adminContents');
  Route::get('/contenidos/agregar','Admin\ContentController@create')->name('adminContents.create');
  Route::post('/contenidos/agregar','Admin\ContentController@store')->name('adminContents.store');
  Route::get('/contenidos/{content}/editar','Admin\ContentController@edit')->name('adminContents.edit')
        ->where('content', '[0-9]+');
  Route::put('/contenidos/{content}/editar','Admin\ContentController@update')->name('adminContents.update')
        ->where('content', '[0-9]+');
  Route::get('/contenidos/papelera','Admin\ContentController@trashed')->name('adminContents.trashed');
  Route::patch('/contenidos/{content}/eliminar','Admin\ContentController@delete')->name('adminContents.trash')
        ->where('content', '[0-9]+');
  Route::get('/contenidos/{id}/restaurar','Admin\ContentController@restore')->name('adminContents.restore')
        ->where('id','[0-9]+');
  
  // Teams
  Route::get('/equipo', 'Admin\TeamController@index')->name('adminTeams');
  Route::get('/equipo/agregar','Admin\TeamController@create')->name('adminTeams.create');
  Route::post('/equipo/agregar','Admin\TeamController@store')->name('adminTeams.store');
  Route::get('/equipo/{team}/editar','Admin\TeamController@edit')->name('adminTeams.edit')
        ->where('team', '[0-9]+');
  Route::put('/equipo/{team}/editar','Admin\TeamController@update')->name('adminTeams.update')
        ->where('team', '[0-9]+');
  Route::get('/equipo/papelera','Admin\TeamController@trashed')->name('adminTeams.trashed');
  Route::patch('/equipo/{team}/eliminar','Admin\TeamController@delete')->name('adminTeams.trash')
        ->where('team', '[0-9]+');
  Route::get('/equipo/{id}/restaurar','Admin\TeamController@restore')->name('adminTeams.restore')
        ->where('id','[0-9]+');
  Route::delete('/equipo/{id}/destruir','Admin\TeamController@destroy')->name('adminTeams.destroy')
        ->where('id', '[0-9]+');
  
  // News
  Route::get('/noticias', 'Admin\NewsController@index')->name('adminNews');
  Route::get('/noticias/agregar','Admin\NewsController@create')->name('adminNews.create');
  Route::post('/noticias/agregar','Admin\NewsController@store')->name('adminNews.store');
  Route::get('/noticias/{news}/editar','Admin\NewsController@edit')->name('adminNews.edit')
        ->where('news', '[0-9]+');
  Route::put('/noticias/{news}/editar','Admin\NewsController@update')->name('adminNews.update')
        ->where('news', '[0-9]+');
  Route::get('/noticias/papelera','Admin\NewsController@trashed')->name('adminNews.trashed');
  Route::patch('/noticias/{news}/eliminar','Admin\NewsController@delete')->name('adminNews.trash')
        ->where('news', '[0-9]+');
  Route::get('/noticias/{id}/restaurar','Admin\NewsController@restore')->name('adminNews.restore')
        ->where('id','[0-9]+');
  Route::delete('/noticias/{id}/destruir','Admin\NewsController@destroy')->name('adminNews.destroy')
        ->where('id', '[0-9]+');
  
  // Messages
  Route::get('/mensajes', 'Admin\MessageController@index')->name('adminMessages');
  Route::get('/mensajes/{message}','Admin\MessageController@show')->name('adminMessages.show')
        ->where('message', '[0-9]+');
  Route::get('/mensajes/papelera','Admin\MessageController@trashed')->name('adminMessages.trashed');
  Route::patch('/mensajes/{message}/eliminar','Admin\MessageController@delete')->name('adminMessages.trash')
        ->where('message', '[0-9]+');
  Route::get('/mensajes/{id}/restaurar','Admin\MessageController@restore')->name('adminMessages.restore')
        ->where('id','[0-9]+');
  Route::delete('/mensajes/{id}/destruir','Admin\MessageController@destroy')->name('adminMessages.destroy')
        ->where('id', '[0-9]+');
});
