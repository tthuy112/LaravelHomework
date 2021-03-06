<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\signupController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;



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

Route::get('signup', function () {
    return view('signup');
});
Route::post('signup', [signupController::class, 'displayInfor']);

Route::get('admin', function () {
    return view('adminpage');
});
Route::get('/typr/{id}',[PageController::class,'getLoaiSp']);
Route::get('admin', [AdminController::class, 'index']);
Route::post('admin', [AdminController::class, 'addRoom']);
Route::get('trangchu',[PageController::class,'getIndex']);
Route::get('contact',[PageController::class,'getContact']);
Route::get('about',[PageController::class,'getAbout']);

Route::get("/",[TableController::class, 'table']);

Route::get('sum', [UserController::class, 'tinhtong']);
Route::post('sum',[UserController::class,'tinhtong']);

Route::get('admin-add-form',[PageController::class,'getAdminAdd'])->name('name-prodcut');
Route::get('admin-add-form',[PageController::class,'postAdminAdd']);