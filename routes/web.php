<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use APP\Http\Controllers\ApprovalsController;
use App\Http\Livewire\Departments;

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
