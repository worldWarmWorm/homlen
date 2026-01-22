<?php


use Homelen\Http\Controllers\ProviderController;
use Homelen\Http\Controllers\UtilityController;
use Illuminate\Support\Facades\Route;

Route::get('/health-check', static function () {
    return [
        'app' => env('APP_NAME'),
        'version' => env('APP_VERSION'),
        'isLoaded' => true,
    ];
});


Route::group(['prefix' => 'provider'], static function () {
    Route::get('/main', [ProviderController::class, 'main'])->name('main');
    Route::get('/list', [ProviderController::class, 'list'])->name('list');
    Route::get('/utilities', [ProviderController::class, 'utilities'])->name('utilities');
});

Route::group(['prefix' => 'utility'], static function () {
    Route::get('/main', [UtilityController::class, 'main'])->name('main');
    Route::get('/list', [UtilityController::class, 'list'])->name('list');
});
