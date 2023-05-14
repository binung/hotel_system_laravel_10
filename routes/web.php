<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// -----------------------------home----------------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->middleware('auth')->name('profile');

// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

// ----------------------------- booking -----------------------------//
Route::get('form/allbooking', [App\Http\Controllers\BookingController::class, 'allbooking'])->middleware('auth')->name('form/allbooking');
Route::get('form/booking/edit/{bkg_id}', [App\Http\Controllers\BookingController::class, 'bookingEdit']);
Route::get('form/booking/add', [App\Http\Controllers\BookingController::class, 'bookingAdd'])->middleware('auth')->name('form/booking/add');

Route::post('form/booking/save', [App\Http\Controllers\BookingController::class, 'saveRecord'])->middleware('auth')->name('form/booking/save');
Route::post('form/booking/update', [App\Http\Controllers\BookingController::class, 'updateRecord'])->middleware('auth')->name('form/booking/update');
Route::post('form/booking/delete', [App\Http\Controllers\BookingController::class, 'deleteRecord'])->middleware('auth')->name('form/booking/delete');

// ----------------------------- customers -----------------------------//
Route::get('form/allcustomers/page', [App\Http\Controllers\CustomerController::class, 'allCustomers'])->middleware('auth')->name('form/allcustomers/page');
Route::get('form/addcustomer/page', [App\Http\Controllers\CustomerController::class, 'addCustomer'])->middleware('auth')->name('form/addcustomer/page');
Route::post('form/addcustomer/save', [App\Http\Controllers\CustomerController::class, 'saveCustomer'])->middleware('auth')->name('form/addcustomer/save');
Route::get('form/customer/edit/{bkg_customer_id}', [App\Http\Controllers\CustomerController::class, 'updateCustomer']);
Route::post('form/customer/update', [App\Http\Controllers\CustomerController::class, 'updateRecord'])->middleware('auth')->name('form/customer/update');
Route::post('form/customer/delete', [App\Http\Controllers\CustomerController::class, 'deleteRecord'])->middleware('auth')->name('form/customer/delete');

// ----------------------------- rooms -----------------------------//
Route::get('form/allrooms/page', [App\Http\Controllers\RoomsController::class, 'allrooms'])->middleware('auth')->name('form/allrooms/page');
Route::get('form/addroom/page', [App\Http\Controllers\RoomsController::class, 'addRoom'])->middleware('auth')->name('form/addroom/page');
Route::get('form/room/edit/{bkg_room_id}', [App\Http\Controllers\RoomsController::class, 'editRoom']);
Route::post('form/room/save', [App\Http\Controllers\RoomsController::class, 'saveRecordRoom'])->middleware('auth')->name('form/room/save');
Route::post('form/room/delete', [App\Http\Controllers\RoomsController::class, 'deleteRecord'])->middleware('auth')->name('form/room/delete');
Route::post('form/room/update', [App\Http\Controllers\RoomsController::class, 'updateRecord'])->middleware('auth')->name('form/room/update');
