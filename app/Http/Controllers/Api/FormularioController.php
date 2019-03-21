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
        $data = $this->despesa->all();
        return view('formulario')->with('despesa', Despesa::all());
    }


    //CRIAR UM NOVO REGISTRO
    public function store(Request $request)
    {
        // dd($request->all());
        Formulario::create($request->all()); 
        return redirect('/api/formulario');
    }


    //BUSCA FORMULARIO ÚNICO PELO ID
    public function show($id)
    {
        // $formulario = $this->formulario->find($id)->Despesas;
        // $data['formulario'] = $formulario; //Var $data recebe o array de formulario
        $data['formulario'] = Formulario::find($id);
        $data['despesas'] = Despesa::all();
        return view('atualizaFormulario', $data);
    }


    //ATUALIZA PASSANDO O ID 
    public function update(Request $request, $id)
    {
            $formularioData = $request->all();
            $formulario = $this->formulario->find($id);
            $formulario->update($formularioData);

        return redirect('/api/formulario');
    }
  
    //REMOVER REGISTRO
    public function destroy($id)
    {
        $formulario = $this->formulario->find($id);
        $formulario->delete();

        return redirect('api/listagem'); 
    }

    public function listagem()
    {
        return view('listagem'); 
    }

}
