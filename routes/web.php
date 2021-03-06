<?php



Route::get('/', function() {
    return redirect('/admin/home');
});

/*
|--------------------------------------------------------------------------
| Group Auth
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    
    Route::get('home', 'ExpenseController@home')->name('admin.home');
    
    //------------------------------Route Init ---------------------------------
                                                                
     Route::get('expense', 'ExpenseController@index')->name('admin.expense');
    
    //--------------------------------------------------------------------------
    
    /*
    |--------------------------------------------------------------------------
    | PEDIDOS
    |--------------------------------------------------------------------------
    |
    */
    //------------------------------Route Pedidos Abertos -----------------------
     Route::get('order', 'FormularioController@order')->name('admin.order');
    //------------------------------Route Pedidos Aprovados -----------------------
    Route::get('approved', 'FormularioController@approved')->name('admin.approved');
    //---------------------------------------------------------------------------
    
    //Routes Criar Form Pedido
    Route::post('formulario', 'FormularioController@store')->name('formulario.store');
    Route::get('formulario', 'FormularioController@index')->name('admin.formulario');
    
    //Routes Update Pedido
    Route::put('update/{id}', 'FormularioController@update');
    Route::get('show/{id}', 'FormularioController@show')->name('admin.show');
    //APPROVE AND DISAPPROVE PEDIDO 
    Route::get('approve/{id}', 'FormularioController@approve')->name('admin.approve');
    Route::get('disapprove/{id}', 'FormularioController@disapprove')->name('admin.disapprove');
 
    Route::prefix('formulario')->group(function () {
        //Route Delete Pedido 
        Route::delete('destroy/{id}', 'FormularioController@destroy');
    });
    
    /*
    |
    |--------------------------------------------------------------------------
    | DESPESAS
    |--------------------------------------------------------------------------
    |
    */

    //Routes Criar nova Despesa
    Route::get('formularioDespesa', 'DespesaController@formularioDespesa')->name('admin.formularioDespesa');
    Route::post('addDespesa', 'DespesaController@store')->name('formulario.addDespesa');
    
    // Route Lista de Despesas cadastradas 
     Route::get('listExpense', 'DespesaController@index')->name('admin.listExpense');


    Route::prefix('despesa')->group(function () {
        //Route Delete Despesas 
        Route::delete('destroy/{id}', 'DespesaController@destroy');
    });


    //Routes Update Despesas
    Route::put('update/despesa/{id}', 'DespesaController@update');
    Route::get('show/despesa/{id}', 'DespesaController@show')->name('admin.show.despesa');
    
    
});
//--------------------------------- Redirects ---------------------------------------------------
// Route::get('/home', function() {
//     return redirect('/login');
// })->name('login');
// Route::get('/', function() {
//     return redirect('/login');
// })->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
