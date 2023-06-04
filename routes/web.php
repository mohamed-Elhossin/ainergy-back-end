<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\User\UserUiController;
use App\Http\Controllers\Admin\AdminUiController;
//=========================== User Routes ===========================

Auth::routes();
Route::get('/', [UserUiController::class, 'home'])->name("user.home");

Route::get('/home', [UserUiController::class, 'home'])->name('home');

/**
 * -
 * -
 * -
 * -
 */
//=========================== Admin Routes ======= ====================
Route::prefix("admin")->group(function () {
    Route::middleware('auth:admin')->group(function () {
        Route::get("/", [AdminUiController::class, 'home'])->name("admin.home");
        Route::get("profile", [AdminUiController::class, 'profile'])->name("admin.profile");
        Route::get("home", [AdminUiController::class, 'home'])->name("admin.home");
        Route::get("logout", [AuthController::class, 'logout'])->name('admin.logout');
    });

    // Pages
    Route::get("login", [AdminUiController::class, 'login'])->name("admin.login");
    Route::get("register", [AdminUiController::class, 'register'])->name("admin.register");
    // Post Functions
    Route::post("adminRegister", [AuthController::class, 'adminRegister'])->name("admin.adminRegister");
    Route::post("adminLogin", [AuthController::class, 'adminLogin'])->name("admin.adminLogin");
});
