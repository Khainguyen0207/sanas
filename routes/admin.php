<?php

Route::group([
    'prefix' => '/admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'as' => 'admin.',
], function () {

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('customers', 'CustomerController');

    Route::resource('rooms', 'RoomController');

    Route::resource('resorts', 'ResortController');

    Route::resource('settings', 'SettingController');
});
