<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::get('/login', function (){
        return 'login';
    });

    Route::middleware('check.admin')->group(function (){
        Route::get('/', function (){
            return 'dashboard';
        });
    });
});
