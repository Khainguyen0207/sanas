<?php

Route::group([
    'prefix' => '/',
    'namespace' => 'App\Http\Controllers\Customer',
], function () {
    Route::get('/', 'HomepageController@index')->name('homepage');

    Route::group([
        'namespace' => 'Auth',
        'prefix' => 'auth',
        'as' => 'auth.',
    ], function () {
        Route::resource('login', 'LoginController');
        Route::resource('register', 'RegisterController');
    });

    Route::resource('resort', 'ResortController');
});
