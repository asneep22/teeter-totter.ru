<?php

use App\Http\Controllers\AdminAdminsController;
use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth', 'index_user')->name('page_user_auth');
    Route::post('/registration', 'register_user')->name('register_user');
    Route::post('/login', 'login_user')->name('login_user');
    Route::post('/login_admin', 'login_admin')->name('login_admin');
    Route::get('/logout', 'logout')->name('logout');

});

//admin
Route::middleware(['authAdmin'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/delete/{id}', 'delete')->name('delete_user')->middleware('chiefAdmin');
    });

    Route::prefix('admin')->group(function () {
        Route::controller(AdminMainController::class)->group(function () {
            Route::get('/main', 'index')->name('page_admin_main');
        });

        Route::controller(AdminUsersController::class)->group(function () {
            Route::get('/users', 'index')->name('page_admin_users');
        });

        Route::controller(AdminAdminsController::class)->group(function () {
            Route::get('/admins', 'index')->name('page_admin_admins');
            Route::post('/admins/create', 'create_admin')->name('create_admin');
        });

        Route::controller(AdminSettingController::class)->group(function () {
            Route::get('/settings/{id}', 'index')->name('page_admin_settings')->middleware('checkId');
        });

    });
});

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('page_welcome');
});


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('page_user_welcome');
})->middleware(['auth', 'signed'])->name('verification.verify');
