<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Super\SuperDashboardController;
use App\Http\Controllers\Backend\Super\BusinessController;
use App\Http\Controllers\Backend\Super\PakegistController;
use App\Http\Controllers\Super\SuperAdminDashboardController;

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

Auth::routes();

Route::group(['middleware' => ['role_or_permission:Super Admin']], function () {
    Route::get('/home', [BackendController::class, 'index'])->name('home');
    Route::get('/super/dashboard', [SuperAdminDashboardController::class, 'superAdmin'])->name('super.dashboard');
    Route::resource('/super', SuperDashboardController::class);
	Route::resource('/business', BusinessController::class);
    Route::resource('/adduser', AddUserController::class);
    Route::resource('/pakegist', PakegistController::class);
    Route::resource('/role', RoleController::class);
    Route::resource('/brand', BrandController::class);
    Route::get('/package/package-submission',[PakegistController::class, 'package_submission'])->name('package.package.submission');


});





Route::resource('/pakegist', PakegistController::class);






Route::group(['middleware' => ['role_or_permission:Super Admin|User']], function () {
    Route::get('/user/dashboard/{id?}', [DashboardController::class, 'index'])->name('user.dashboard');
});
















// Route::get('/test', [TestController::class, 'testRoute']);
