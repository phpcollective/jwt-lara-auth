<?php
Route::middleware(['api', 'auth'])
    ->namespace(PHPCollective\JWTLaraAuth\Controllers::class)
    ->prefix('api/v1')
    ->group(function () {
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'ResetPasswordController@reset');
        Route::post('register', 'RegisterController@register');
    });
