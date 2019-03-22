<?php

/*
|--------------------------------------------------------------------------
| Group Auth
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    
    
    //------------------------------Route Init ---------------------------------
                                                                
     Route::get('expense', 'ExpenseController@index')->name('admin.expense');
    
    //--------------------------------------------------------------------------
    

    //------------------------------Route Pedidos Abertos -----------------------

     Route::get('order', 'FormularioController@order')->name('admin.order');

    //---------------------------------------------------------------------------


    //------------------------------Route Pedidos Aprovados -----------------------

    Route::get('approved', 'FormularioController@approved')->name('admin.approved');

    //---------------------------------------------------------------------------

    

    //Routes create Form Pedido
    Route::post('formulario', 'FormularioController@store')->name('formulario.store');
    Route::get('formulario', 'FormularioController@index')->name('admin.formulario');

    // Route List Pedidos 
    Route::get('listagem', 'FormularioController@listagem')->name('admin.listagem');
    

    //Routes Update Pedido
    Route::put('update/{id}', 'FormularioController@update');
    Route::get('show/{id}', 'FormularioController@show')->name('admin.show');

    //APPROVE AND DISAPPROVE PEDIDO 
    Route::get('approve/{id}', 'FormularioController@approve')->name('admin.approve');
    Route::get('disapprove/{id}', 'FormularioController@disapprove')->name('admin.disapprove');

    

    

    //Route Delete Pedido 
    Route::delete('destroy/{id}', 'FormularioController@destroy');
    


    // Route::get('/', 'AdminController@index')->name('admin.home');
});

Route::get('/', 'SiteController@index')->name('home');

/*
|--------------------------------------------------------------------------
|  Routes to user Auth
|---------------------------------------------------------------------------
|
*/

// Route::get('/login', ['uses' => 'Controller@fazerLogin']);
// Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);


Auth::routes();

//----------------------------------------------------------------------------------------



// Route::get('/listagem', 'FormularioController@index');




