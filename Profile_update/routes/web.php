<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\ProfileUpdateController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\UserFeedbackController;

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


Route::get('/registration', [UserRegistrationController::class, 'getUserRegistration']);
Route::get('/user/registration', [UserRegistrationController::class, 'getUserRegistration']);
Route::post('/user/register', [UserRegistrationController::class, 'getUserRegister']);

Route::get('/login', [UserLoginController::class, 'getUserLogin']);
Route::get('/user/login', [UserLoginController::class, 'getUserLogin']);
Route::post('/user/login/verify', [UserLoginController::class, 'getUserLoginVerify']);
Route::get('/user/home', [UserLoginController::class, 'getUserHome'])->middleware('checkSession');

Route::get('/user/profile', [ProfileUpdateController::class, 'getprofile'])->middleware('checkSession');
Route::get('/profile', [ProfileUpdateController::class, 'getProfile'])->middleware('checkSession');
//Route::post('/user/profile/update', [ProfileUpdateController::class, 'getProfileUpdate'])->middleware('checkSession');
Route::post('/user/profile/update', [ProfileUpdateController::class, 'getProfileUpdate']);

Route::get('/logout', [UserLoginController::class,'getLogout']);
Route::get('/user/logout', [UserLoginController::class,'getLogout']);

Route::get('/background1', [BackgroundController::class,'getBackground1']);
Route::get('/background2', [BackgroundController::class,'getBackground2']);
Route::get('/background3', [BackgroundController::class,'getBackground3']);
Route::get('/backgrounddefault', [BackgroundController::class,'getBackgroundDefault']);


Route::get('/user/feedback', [UserFeedbackController::class,'getFeedback']);
Route::post('/user/sendFeedback', [UserFeedbackController::class,'getSendFeedback']);






//Route::post('/updated_profile', [UpdateController::class, 'profile']);
//Route::post('/getupdate', [UpdateProfileUpdateController::class, 'update']);
?>