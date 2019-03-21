<?php

/*
|--------------------------------------------------------------------------
| Group Auth
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function () {
    Route::get('admin', 'AdminController@index')->name('admin.home');
});

Route::get('/', 'SiteController@index')->name('home');

/*
|--------------------------------------------------------------------------
|  Routes to user Auth
|--------------------------------------------------------------------------
|
*/

// Route::get('/login', ['uses' => 'Controller@fazerLogin']);
// Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);


Auth::routes();

//----------------------------------------------------------------------------------------



// Route::get('/listagem', 'FormularioController@index');




