<?php

use App\Http\Controllers\ShopController;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
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

Route::get('/',[ShopController::class,'phones'])->name('index');
Route::get('/create',[ShopController::class,'create']);
Route::get('/store',[ShopController::class,'store']);
Route::resource('phone',ShopController::class);
