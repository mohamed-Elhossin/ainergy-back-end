<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\User\UserUiController;
use App\Http\Controllers\Admin\AdminUiController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ControlUserController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\User\CategoryController as UserCategoryController;
use App\Http\Controllers\User\CommintController;
use App\Http\Controllers\User\LikeController;
use App\Http\Controllers\User\ServicesController as UserServicesController;

//=========================== User Routes ===========================

Auth::routes();
Route::get('/', [UserUiController::class, 'home'])->name("user.home");


Route::prefix("user")->group(function () {
    Route::get('/home', [UserUiController::class, 'home'])->name('home');
    Route::get('/category', [UserCategoryController::class, 'index'])->name("user.category");
    // Get All Services By category ID
    Route::get('/services/{id}', [UserServicesController::class, 'listServiceByCategory'])->name("user.services");
    //  show one Services
    Route::get('/service/show/{id}', [UserServicesController::class, 'show'])->name("user.oneSerivces");
    // Create commint With Services ID
    Route::post("createCommint/{id}", [CommintController::class, 'store'])->name("commint.create");
    // Get all Services in all Categories
    Route::get('/allServices', [UserServicesController::class, 'AllServices'])->name("user.allServices");
    Route::middleware(['createServices'])->group(function () {
        // vendor Can Cretae Services
        Route::get("goTocreateServicesPage", [UserServicesController::class, "createServices"])->name("services.createPage");
        Route::post("goTocreateServicesPage", [UserServicesController::class, "store"])->name("services.storeVendor");
        // List Services by Vendor
        Route::get("yourServices", [UserServicesController::class, "yourServices"])->name("services.yourServices");
    });

    // by Services ID
    Route::post("createLike/{id}", [LikeController::class, "store"])->name("like.create");
});



// =========================== Admin Routes ===========================
Route::prefix("admin")->group(function () {
    Route::middleware('auth:admin')->group(function () {
        // Admin pages
        Route::prefix("pages")->group(function () {
            Route::get("/", [AdminUiController::class, 'home'])->name("admin.home");
            Route::get("profile", [AdminUiController::class, 'profile'])->name("admin.profile");
            Route::get("home", [AdminUiController::class, 'home'])->name("admin.home");
            // Admin  Authantication
            Route::get("logout", [AuthController::class, 'logout'])->name('admin.logout');
            Route::post("adminRegister", [AuthController::class, 'adminRegister'])->name("admin.adminRegister");
            Route::get("register", [AdminUiController::class, 'register'])->name("admin.register");
        });
        // Admin Categorios
        Route::prefix("category")->group(function () {
            Route::get('index', [CategoryController::class, 'index'])->name("category.index");
            Route::get('create', [CategoryController::class, 'create'])->name("category.create");
            Route::post('create', [CategoryController::class, 'store'])->name("category.store");
            Route::get('edit/{id}', [CategoryController::class, 'edit'])->name("category.edit");
            Route::post('edit/{id}', [CategoryController::class, 'update'])->name("category.update");
            Route::get('delete/{id}', [CategoryController::class, 'destroy'])->name("category.destroy");
        });
        // Users
        Route::prefix("user")->group(function () {
            Route::get("vendor", [ControlUserController::class, 'vendor'])->name("user.vendor");
            Route::get("index", [ControlUserController::class, 'index'])->name("user.listAll");
            Route::get("delete", [ControlUserController::class, 'index'])->name("user.delete");
            Route::get("changeVendorStatus/{id}", [ControlUserController::class, 'changeVendorStatus'])->name("user.changeVendorStatus");

        });
        // Admin Services
        Route::prefix("services")->group(function () {
            Route::get('deleteall', [ServicesController::class, 'deleteall'])->name("services.deleteall");

            Route::get('lastActiviy', [ServicesController::class, 'lastactivity'])->name("services.lastactivity");

            Route::get('index', [ServicesController::class, 'joinData'])->name("services.index");
            Route::get('create', [ServicesController::class, 'create'])->name("services.create");
            Route::post('create', [ServicesController::class, 'store'])->name("services.store");
            Route::get('listServiceByCategory/{id}', [ServicesController::class, 'listServiceByCategory'])->name("services.listServiceByCategory");
            Route::get('delete/{id}', [ServicesController::class, 'destroy'])->name("services.destroy");
        });
    });

    // Login page
    Route::get("login", [AdminUiController::class, 'login'])->name("admin.login");
    // Post Loign
    Route::post("adminLogin", [AuthController::class, 'adminLogin'])->name("admin.adminLogin");
});
