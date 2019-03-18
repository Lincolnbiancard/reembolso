<?php

namespace App\Http\Controllers\Api;

use \App\formulario;
use \App\Api\apiError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormularioController extends Controller
{
   
    //instanciando var private 
    private $formulario;


    //CONSTRUTOR
    public function __construct(Formulario $formulario){
        
        $this->formulario = $formulario;
    }

    public function index()
    {
        return response()->json($this->formulario->paginate(10));
    }


    //CRIAR UM NOVO REGISTRO
    public function store(Request $request)
    {
        $formularioData = $request->all();
        
        $this->formulario->create($formularioData);

        return 'Dados criado com sucesso!';
    }

    //BUSCA FORMULARIO ÚNICO PELO ID
    public function show($id)
    {
        $formulario = $this->formulario->find($id);

        $data['formulario'] = $formulario; //Var $data recebe o array de formulario
        return response()->json($data);
    }


    //ATUALIZA O USUARIO PASSANDO O ID 
    public function update(Request $request, $id)
    {
        $formularioData = $request->all();
        $formulario = $this->formulario->find($id);
        $formulario->update($formularioData);

        return 'Dados atualizado com sucesso!';
    }

  
    //REMOVE REGISTRO
    public function destroy($id)
    {
        Formulario::destroy($id);

        return 'Dados removido com sucesso!'; 
    }
}
