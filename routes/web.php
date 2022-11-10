<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\InstitutionController;
use App\Http\Controllers\Web\MessageController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\TeamController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/institucion', [InstitutionController::class, 'index'])->name('institution');

Route::get('/noticias', [NewsController::class, 'index'])->name('news');
Route::get('/noticias/{news}', [NewsController::class, 'show'])->name('news.show')->where('news', '[0-9]+');

Route::get('/equipo', [TeamController::class, 'index'])->name('team');
Route::get('/equipo/{team}', [TeamController::class, 'show'])->name('team.show')->where('team', '[0-9]+');

Route::get('/contacto', [MessageController::class, 'create'])->name('contact');
Route::post('/contacto/agregar', [MessageController::class, 'store'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Web Routes Web
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'] , function() {
	Route::get('/password', [ProfileController::class, 'passwordView'])->name('password');
	Route::put('/password/update', [ProfileController::class, 'updatePassword'])->name('passwordUpdate');
	// Profile
	Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
	Route::put('/profile/update', [ProfileController::class, 'update'])->name('profileUpdate');
});
