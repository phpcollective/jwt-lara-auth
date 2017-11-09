<?php
Route::prefix('api/v1')
    ->namespace(PHPCollective\JWTLaraAuth\Controllers::class)
    ->middleware(['api'])
    ->group(function () {
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'ResetPasswordController@reset');
        Route::post('register', 'RegisterController@register');
    });
