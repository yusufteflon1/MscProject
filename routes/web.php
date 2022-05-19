<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Manager Routes

Route::get('manager-delete-user/{uid}', 'App\Http\Controllers\ManagerController@deleteUser');
Route::get('manager-dashboard', 'App\Http\Controllers\ManagerController@managerDashboard');
Route::get('manager-users-table', 'App\Http\Controllers\ManagerController@usersTable');
Route::get('manager-approval-table', 'App\Http\Controllers\ManagerController@approvalsTable');
Route::get('/verifiedClientDetail/{uid}', 'App\Http\Controllers\ManagerController@clientDetail');
Route::put('/post-approval/{apid}', 'App\Http\Controllers\ManagerController@postApproval');
Route::put('/post-user-id/{uid}', 'App\Http\Controllers\ManagerController@postUserID');


//Staff Routes

Route::get('staff-dashboard', 'App\Http\Controllers\StaffController@staffDashboard');
Route::get('staff-client-table', 'App\Http\Controllers\StaffController@clientTable');
Route::get('/search/', 'App\Http\Controllers\StaffController@search')->name('search');
Route::get('staff-credit-recovery-table', 'App\Http\Controllers\StaffController@creditRecoveryTable');
Route::put('post-verify/{uid}', 'App\Http\Controllers\StaffController@postVerify');
Route::get('/guarantorDetail/{uid}', 'App\Http\Controllers\StaffController@guarantorDetail');
Route::get('/businessDetail/{uid}', 'App\Http\Controllers\StaffController@businessDetail');
Route::get('/clientDetail/{uid}', 'App\Http\Controllers\StaffController@clientDetail');



//Client Routes
Route::get('/client-profile', 'App\Http\Controllers\ClientsController@clientProfile');
Route::get('/client-payment-history', 'App\Http\Controllers\ClientsController@clientPaymentHistory');
Route::post('/upload-payment', 'App\Http\Controllers\ClientsController@postUploadPayment');
Route::post('/post-client-profile', 'App\Http\Controllers\ClientsController@postClientProfile');
Route::post('/upload-business', 'App\Http\Controllers\ClientsController@postUploadBusiness');
Route::post('/upload-guarantor', 'App\Http\Controllers\ClientsController@postUploadGuarantor');


//Public Routes
Route::get('/client-register', 'App\Http\Controllers\PublicController@clientRegister')->name('client-register');
Route::get('dashboard', 'App\Http\Controllers\HomeController@dashboard');
Route::get('logout', 'App\Http\Controllers\HomeController@logout')->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('welcome', 'App\Http\Controllers\PublicController@index');
Route::get('/', 'App\Http\Controllers\HomeController@index');


// Google Authentication Routes
Route::get(
    '/auth/google/redirect',
    [GoogleController::class, 'loginUsingGoogle']
)->name('loginUsingGoogle');

Route::get(
    '/auth/google/callback',
    [GoogleController::class, 'googleCallback']
)->name('googleCallback');
