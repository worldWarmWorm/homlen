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
    Route::get('/list', [ProviderController::class, 'list'])->name('list');
    Route::get('/{id}/show', [ProviderController::class, 'show'])->name('show');
    Route::delete('/{id}/destroy', [ProviderController::class, 'destroy'])->name('destroy');
    Route::post('/store', [ProviderController::class, 'store'])->name('store');
    Route::put('/{id}/update', [ProviderController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'utility'], static function () {
    Route::get('/list', [UtilityController::class, 'list'])->name('list');
});
