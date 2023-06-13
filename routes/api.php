<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIs\servicesController;
use App\Http\Controllers\APIs\CategoryController;
use App\Http\Controllers\APIs\CommintController;
use App\Http\Controllers\APIs\FavoriteController;
use App\Http\Controllers\APIs\LikeController;
use App\Http\Controllers\User\ApiauthController;

// Public Path
Route::prefix("user")->group(function () {
    Route::post("register", [ApiauthController::class, 'register']);
    Route::post("login", [ApiauthController::class, 'login']);
});

// Private with Token
Route::middleware('auth:sanctum')->group(function () {

    Route::get("logout", [ApiauthController::class, 'logout']);
    Route::post("user/update/{id}", [ApiauthController::class, 'update']);
    Route::prefix("commint")->group(function () {
        // get All
        Route::get("/", [CommintController::class, 'index']);
        Route::post("/", [CommintController::class, 'store']);
        Route::delete("/{id}", [CommintController::class, 'destroy']);
    });
    Route::prefix("category")->group(function () {
        // get All
        Route::get("/", [CategoryController::class, 'index']);
    });
    Route::prefix("services")->group(function () {
        // get All
        Route::get("/", [servicesController::class, 'index']);
        // get One Services
        Route::get("/{id}", [servicesController::class, 'show']);
        //  Get by Category ID
        Route::get("categoryId/{id}", [servicesController::class, 'listServiceByCategory']);
        // Create Services
        Route::post("/", [servicesController::class, 'store']);
        // Update
        Route::post("/{id}", [servicesController::class, 'update']);

        // Delete
        Route::delete("/{id}", [servicesController::class, 'destroy']);
    });
    Route::prefix("likes")->group(function () {
        // get All
        // number Of services Like by Services ID
        Route::get("/{id}", [LikeController::class, 'index']);
        Route::post("/", [LikeController::class, 'store']);
        Route::post("/{id}", [LikeController::class, 'update']);

    });
    Route::prefix("favorite")->group(function () {
        // read Fav Categories By user ID
        Route::get("/{id}", [FavoriteController::class, 'index']);
        Route::post("/", [FavoriteController::class, 'store']);
    });

});
