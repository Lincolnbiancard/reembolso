<?php

namespace App\Http\Controllers\Api;

use \App\Despesas;
use \App\Api\apiError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DespesasController extends Controller
{
   
    private $despesas;

    public function __construct(Despesas $despesas) {
        $this->despesas = $despesas;
    }


    public function index()
    {
        return response()->json($this->despesas->paginate(10));
    }
    
    //Adicionar um registro novo 
    public function store(Request $request)
    {
        $despesaData = $request->all();
        $this->despesas->create($despesaData);
        
        return 'Despesa criada com sucesso!';
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
