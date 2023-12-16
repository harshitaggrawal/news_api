<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get("/",[NewsController::class,'index']);

Route::get("techNews",[NewsController::class,'get_data_tech']);
Route::get("gamingNews",[NewsController::class,'get_data_gaming']);
Route::get("webNews",[NewsController::class,'get_data_web']);
Route::get("tvNews",[NewsController::class,'get_data_tv']);

