<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;


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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', function () {
  return view('welcome');
});


Route::group(['IsAdmin' => 'admin'], function () {
  Route::resource('category', CategoriesController::class);
});

// Route::resource('category', CategoriesController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Backend.index');


Route::get('/homepage', function () {
  return view('Frontend.index');
});