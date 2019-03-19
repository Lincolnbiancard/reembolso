<?php

namespace App\Http\Controllers\Api;

use \App\formulario;
use \App\Despesa;
use \App\Api\apiError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormularioController extends Controller
{
   
    //instanciando var private 
    private $formulario;
    private $despesa;


    //CONSTRUTOR
    public function __construct(Formulario $formulario, Despesa $despesa){
        
        $this->formulario = $formulario;
        $this->despesa = $despesa;
    }

    public function index()
    {
        $data = $this->formulario->all();
        return view('listagem')->with('data', $data);
    }


    //CRIAR UM NOVO REGISTRO
    public function store(Request $request)
    {
        Formulario::create($request->all()); 
        return redirect('/api/formulario');
    }


    //Adicionar um novo reembolso 
    public function formularioFunction(Request $request) {
        $data = $this->despesa->all();
        return view('formulario')->with('despesa', Despesa::all());
    }

    //BUSCA FORMULARIO ÚNICO PELO ID
    public function show($id)
    {
        $formulario = $this->formulario->find($id)->Despesas;

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
