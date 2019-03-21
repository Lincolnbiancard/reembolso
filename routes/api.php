<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function(){
    
    Route::resource('/formulario', 'FormularioController');
    
    Route::get('/formulario/listagem', 'FormularioController@listagem');

    // Route::get('/remove/{id}', 'FormularioController@destroy');
    
    
    // Route::put('/formulario/atualiza/{id}', 'FormularioController@update'); 

    // Despesas
    Route::resource('/despesas', 'DespesasController');
   
});
