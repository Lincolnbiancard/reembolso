<?php

namespace App\Http\Controllers\Api;

use \App\Despesa;
use \App\Api\apiError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DespesasController extends Controller
{
   
    private $despesas;

    public function __construct(Despesa $despesas) {
        $this->despesas = $despesas;
    }


    public function index()
    {
        $data = $this->despesas->all();
        return view('formularioDespesa')->with('despesa', Despesa::all());
    }
    
    
    //Adicionar um registro novo 
    public function store(Request $request)
    {
        $data = $this->despesas->all();
        Despesa::create($request->all()); 
        return view('formularioDespesa')->with('despesa', Despesa::all());
    }


    public function show($id)
    {
        $mostraDespesa = $this->despesas->find($id);

        return response()->json($mostraDespesa);
    }


 
    public function update(Request $request, $id)
    {
        $dataDespesas = $request->all();
        $despesas = $this->despesas->find($id);
        $despesas->update($dataDespesas);

        return 'Despesa atualizada com sucesso!';
    }

    public function destroy($id)
    {
        $despesas = $this->despesas->find($id);
        $despesas->delete($id);

        return 'Despesa deletada com sucesso!';
    }
}
