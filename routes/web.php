<?php

use App\Http\Controllers\Backend\Banner\BannerController;
use App\Http\Controllers\Backend\Slider\SliderController;
use App\Http\Controllers\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::prefix('configurations')->name('configurations.')->group(function () {

        Route::controller(SliderController::class)->name('sliders.')->group(function () {
            Route::get('sliders', 'create')->name('create');
            Route::post('sliders', 'store')->name('store');
            Route::post('sliders/upload-image', 'uploadImage')->name('uploadImage');
            Route::delete('sliders/{id}', 'destroy')->name('destroy');
        });

        Route::controller(BannerController::class)->name('banners.')->group(function () {
            Route::get('banners', 'showPageBanner')->name('edit');
            Route::post('banners', 'store')->name('store');
        });
    });
});

Route::controller(HomeController::class)->name('frontend.')->group(function () {
    route::get('/', 'index')->name('home');
});
