<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
});
// Route::get('/login', function () {
//     return view('login.test');
// });



Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'verify']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/create', [HomeController::class, 'create']);
Route::get('/home/update/{id}', [HomeController::class, 'update']);
Route::post('/home/update/{id}', [HomeController::class, 'updatedPost']);
Route::post('/home/create', [HomeController::class, 'add']);
Route::get('/home/userlist', [HomeController::class, 'userlist']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/home/delete/{id}', [HomeController::class, 'delete']);
Route::get('home/userupdate/{id}', [HomeController::class, 'confirmDelete']);
