<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ok', function () {
    return 'OK';
});

Route::get('/json', function () {
    return return response()->json([
        'message' => 'Hello World !',
    ]);
});