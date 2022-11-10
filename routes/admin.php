<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes Admin
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'prefix' => '/admin'] , function() {
  // Users
  Route::get('/usuarios', [UserController::class, 'index'])->name('adminUsers');
  Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('adminUsers.edit')
        ->where('user', '[0-9]+');
  Route::put('/usuarios/{user}/editar', [UserController::class, 'update'])->name('adminUsers.update')
        ->where('user', '[0-9]+');
  Route::get('/usuarios/{user}/password', [UserController::class, 'password'])->name('adminUsers.password')
        ->where('user', '[0-9]+');
  Route::put('/usuarios/{user}/password', [UserController::class, 'updatePassword'])
        ->name('adminUsers.updatePassword')->where('user', '[0-9]+');
	Route::put('/usuarios/{id}/rol', [UserController::class, 'rol'])->name('adminUsers.rol')->where('id', '[0-9]+');
	Route::get('/usuarios/papelera', [UserController::class, 'trashed'])->name('adminUsers.trashed');
  Route::patch('/usuarios/{user}/eliminar', [UserController::class, 'delete'])->name('adminUsers.trash')
        ->where('user', '[0-9]+');
  Route::get('/usuarios/{id}/restaurar', [UserController::class, 'restore'])->name('adminUsers.restore')
        ->where('id', '[0-9]+');
  Route::delete('/usuarios/{id}/destruir', [UserController::class, 'destroy'])->name('adminUsers.destroy')
        ->where('id', '[0-9]+');
  
  // Contents
  Route::get('/contenidos', [ContentController::class, 'index'])->name('adminContents');
  Route::get('/contenidos/agregar', [ContentController::class, 'create'])->name('adminContents.create');
  Route::post('/contenidos/agregar', [ContentController::class, 'store'])->name('adminContents.store');
  Route::get('/contenidos/{content}/editar', [ContentController::class, 'edit'])->name('adminContents.edit')
        ->where('content', '[0-9]+');
  Route::put('/contenidos/{content}/editar', [ContentController::class, 'update'])->name('adminContents.update')
        ->where('content', '[0-9]+');
  Route::get('/contenidos/papelera', [ContentController::class, 'trashed'])->name('adminContents.trashed');
  Route::patch('/contenidos/{content}/eliminar', [ContentController::class, 'delete'])->name('adminContents.trash')
        ->where('content', '[0-9]+');
  Route::get('/contenidos/{id}/restaurar', [ContentController::class, 'restore'])->name('adminContents.restore')
        ->where('id','[0-9]+');
  
  // Teams
  Route::get('/equipo', [TeamController::class, 'index'])->name('adminTeams');
  Route::get('/equipo/agregar', [TeamController::class, 'create'])->name('adminTeams.create');
  Route::post('/equipo/agregar', [TeamController::class, 'store'])->name('adminTeams.store');
  Route::get('/equipo/{team}/editar', [TeamController::class, 'edit'])->name('adminTeams.edit')
        ->where('team', '[0-9]+');
  Route::put('/equipo/{team}/editar', [TeamController::class, 'update'])->name('adminTeams.update')
        ->where('team', '[0-9]+');
  Route::get('/equipo/papelera', [TeamController::class, 'trashed'])->name('adminTeams.trashed');
  Route::patch('/equipo/{team}/eliminar', [TeamController::class, 'delete'])->name('adminTeams.trash')
        ->where('team', '[0-9]+');
  Route::get('/equipo/{id}/restaurar', [TeamController::class, 'restore'])->name('adminTeams.restore')
        ->where('id','[0-9]+');
  Route::delete('/equipo/{id}/destruir', [TeamController::class, 'destroy'])->name('adminTeams.destroy')
        ->where('id', '[0-9]+');
  
  // News
  Route::get('/noticias', [NewsController::class, 'index'])->name('adminNews');
  Route::get('/noticias/agregar', [NewsController::class, 'create'])->name('adminNews.create');
  Route::post('/noticias/agregar', [NewsController::class, 'store'])->name('adminNews.store');
  Route::get('/noticias/{news}/editar', [NewsController::class, 'edit'])->name('adminNews.edit')
        ->where('news', '[0-9]+');
  Route::put('/noticias/{news}/editar', [NewsController::class, 'update'])->name('adminNews.update')
        ->where('news', '[0-9]+');
  Route::get('/noticias/papelera', [NewsController::class, 'trashed'])->name('adminNews.trashed');
  Route::patch('/noticias/{news}/eliminar', [NewsController::class, 'delete'])->name('adminNews.trash')
        ->where('news', '[0-9]+');
  Route::get('/noticias/{id}/restaurar', [NewsController::class, 'restore'])->name('adminNews.restore')
        ->where('id','[0-9]+');
  Route::delete('/noticias/{id}/destruir', [NewsController::class, 'destroy'])->name('adminNews.destroy')
        ->where('id', '[0-9]+');
  
  // Messages
  Route::get('/mensajes', [MessageController::class, 'index'])->name('adminMessages');
  Route::get('/mensajes/{message}', [MessageController::class, 'show'])->name('adminMessages.show')
        ->where('message', '[0-9]+');
  Route::get('/mensajes/papelera', [MessageController::class, 'trashed'])->name('adminMessages.trashed');
  Route::patch('/mensajes/{message}/eliminar', [MessageController::class, 'delete'])->name('adminMessages.trash')
        ->where('message', '[0-9]+');
  Route::get('/mensajes/{id}/restaurar', [MessageController::class, 'restore'])->name('adminMessages.restore')
        ->where('id','[0-9]+');
  Route::delete('/mensajes/{id}/destruir', [MessageController::class, 'destroy'])->name('adminMessages.destroy')
        ->where('id', '[0-9]+');
});
