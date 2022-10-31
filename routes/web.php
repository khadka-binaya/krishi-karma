<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryCrudController;

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
  return view('Backend.index');
});

// Route::get('/category/create', [\App\Http\Controllers\Admin\CategoryCrudController::class, 'create']);

Route::get('/category/index', [\App\Http\Controllers\Admin\CategoryCrudController::class, 'index']);

Route::resource('Category', 'CategoryCrudController::class');


Route::any('category/create', [CategoryCrudController::class, 'createCategory'])->name('createCategory');
