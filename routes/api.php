<?php


use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return [
        'app' => env('APP_NAME'),
        'version' => env('APP_VERSION'),
        'isLoaded' => true,
    ];
});
