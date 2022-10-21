<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateController;

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

Route::get('/index', function () {
    return view('Home');
});
// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/home', [PagesController::class, 'home']);


Route::get('/registration', [RegisterController::class, 'register']);
Route::post('/getregister', [RegisterController::class, 'registration']);

Route::get('/gotologin', [LoginController::class, 'login']);
Route::post('/profile', [LoginController::class, 'checklogin']);

Route::post('/profile', [UpdateController::class, 'profile']);
//Route::post('/updated_profile', [UpdateController::class, 'profile']);
Route::post('/getupdate', [UpdateController::class, 'update']);
?>