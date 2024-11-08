<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Backend\Banner\BannerController;
use App\Http\Controllers\Backend\ConfigWebsiteController;
use App\Http\Controllers\Backend\Slider\SliderController;
use App\Http\Controllers\Backend\Video\VideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('admin/', function () {
    return view('backend.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {


    Route::middleware('guest')->group(function () {
        route::get('login', [AuthController::class, 'login'])->name('login');
        route::post('login', [AuthController::class, 'authenticate']);
    });

    route::middleware('auth')->group(function () {
        route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/', function () {
            return view('backend.dashboard');
        })->name('dashboard');

        Route::prefix('configurations')->name('configurations.')->group(function () {

            Route::controller(SliderController::class)->name('sliders.')->group(function () {
                Route::get('sliders', 'create')->name('create');
                Route::post('sliders/upload-image', 'uploadImage')->name('uploadImage');
                Route::delete('sliders/{id}', 'destroy')->name('destroy');

                Route::get('sliders/v2', 'create_v2')->name('create_v2');
                Route::get('sliders/v3', 'create_v3')->name('create_v3');
            });

            route::controller(VideoController::class)->name('videos.')->group(function () {
                route::get('videos', 'create')->name('create');
                route::post('videos', 'store');
            });

            Route::controller(BannerController::class)->name('banners.')->group(function () {
                Route::get('banners', 'showPageBanner')->name('edit');
                Route::post('banners', 'store')->name('store');
            });

            Route::controller(ConfigWebsiteController::class)->name('website.')->group(function () {
                Route::get('website', 'edit')->name('edit');
                Route::put('website', 'update')->name('update');
                route::get('contacts', 'contact')->name('contact');
                route::get('mails', 'mails')->name('mails');
                route::post('mails', 'send');
            });
        });
    });
});

Route::controller(HomeController::class)->name('frontend.')->group(function () {
    route::get('/', 'index')->name('home');
    route::post('contact', 'contact')->name('contact');
});
