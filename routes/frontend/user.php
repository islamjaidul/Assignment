<?php

Route::group([
    'prefix' => 'users',
    'namespace' => "Frontend"
], function() {
    
    Route::get('/', 'UsersController@index')->name('users.all');
    
    Route::get('delete/{id}', 'UsersController@delete')->name('user.delete');
    
    Route::get('create', 'UsersController@create')->name('user.create');
    
    Route::post('store/{id?}', 'UsersController@store')->name('user.store');
    
    Route::get('edit/{id}', 'UsersController@edit')->name('user.edit'); 
});