<?php

namespace App\Http\Controllers\Admin;

use \App\Despesa;
use \App\Api\apiError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\formulario;
use App\Http\Controllers\ExpenseController;
use App\Models\Historic;
use DB;
use App\Http\Requests\FormValidator;

class DespesaController extends Controller
{
   
    private $despesas;

    public function __construct(Despesa $despesas) {
        $this->despesas = $despesas;
    }


    //LISTAGEM DE DESPESAS
    public function index()
    {
        $despesas['despesas'] = Despesa::all();
     
         return view('admin.expense.listExpense', $despesas); 
    }    
    
     //FORMULARIO DE DESPESA
     public function formularioDespesa()
     {
         return view('admin.expense.formularioDespesa');
     }


    //Adicionar um registro novo 
    public function store(Request $request)
    {
        $data = $request->all();
        $this->despesas->create($data);

       return redirect('admin/formularioDespesa');
    }


    public function show($id)
    {
        $data = $this->despesas->find($id);
        return view('admin.expense.updateDespesa', $data);
    }


    public function update(Request $request, $id)
    {
        $formularioData = $request->all();
        $despesa = $this->despesas->find($id);
        $despesa->update($formularioData);

        return redirect('admin/listExpense');
    }

    public function destroy($id)
    {
        $despesa = $this->despesas->find($id);
        $despesa->delete();

        return redirect('admin/listExpense'); 
    }
}
