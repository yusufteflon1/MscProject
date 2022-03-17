<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use APP\Http\Controllers\ApprovalsController;
use App\Http\Livewire\Departments;
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




Route::group(['middleware' => [
    'auth:sanctum',
    'verified'
]], function () {

    Route::get(
        '/verify',
        function () {
            return view('verify');
        }
    )->name('verify');


    Route::get(
        '/dashboard',
        function () {
            return view('welcome');
        }
    )->name('dashboard');

    Route::get(
        '/',
        function () {
            return view('welcome');
        }
    )->name('welcome');

    Route::get(
        '/clients',
        function () {
            return view('admin.clients');
        }
    )->name('clients');

    Route::get(
        '/approvals',
        function () {
            return view('approvals');
        }
    )->name('approvals');

    Route::get('/departments', Departments::class);

    Route::get('/client/{id}', [ClientsController::class, 'show']);
});

Route::get(
    '/auth/google/redirect',
    [GoogleController::class, 'loginUsingGoogle']
)->name('loginUsingGoogle');

Route::get(
    '/auth/google/callback',
    [GoogleController::class, 'googleCallback']
)->name('googleCallback');
