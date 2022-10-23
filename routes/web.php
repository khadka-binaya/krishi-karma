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

Route::get('/', function () {
  return view('Backend.index');
});

// Route::get('/backend/category/create', [\App\Http\Controllers\Admin\CategoryCrudController::class, 'create']);




Route::get('/create', function () {
  return view('Backend.category.create');
});
