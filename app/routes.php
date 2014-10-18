<?php


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::group(['before' => 'guest'], function () {

    Route::get('sign-up', ['as' => 'sign_up', 'uses' => 'UserController@signUp'] );
    Route::post('sign-up', ['as' => 'register', 'uses' => 'UserController@register'] );
});

// Formularios
Route::group(['before' => 'auth'], function () {

    require (__DIR__ . '/routes/auth.php');

    // Admin routes

    Route::group(['before' => 'is_admin'], function () {

        require (__DIR__ . '/routes/admin.php');

    });

});
