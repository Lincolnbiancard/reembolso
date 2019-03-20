<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function(){
    
    Route::resource('/formulario', 'DespesasController');

    Route::get('/formulario', 'FormularioController@formularioCadastro');
    Route::get('/teste', 'FormularioController@teste');
    Route::get('/atualizaFormulario/{id}', 'FormularioController@formularioAtualiza');
    Route::get('/listagem', 'FormularioController@index');
    Route::get('/remove/{id}', 'FormularioController@destroy');
    
    Route::post('/adiciona', 'FormularioController@store');
    
    Route::put('/atualiza/{id}', 'FormularioController@update'); 

    // Despesas
    Route::resource('/despesas', 'DespesasController');
   
});
