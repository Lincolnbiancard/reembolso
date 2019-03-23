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
    private $formulario;

    public function __construct(Despesa $despesas, Formulario $formulario) {
        $this->despesas = $despesas;
        $this->formulario = $formulario;
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
        $despesa['despesa'] = Despesa::find($id);
        return view('admin.expense.updateDespesa', $despesa);
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

        $formularios = $this->formulario->whereRaw('despesa_id LIKE "%' .  $id . '%"')->get();

        foreach ($formularios as $form) {
            $form->despesa_id = array_diff($form->despesa_id, [$id]);
            $form->save();
        }

        return redirect('admin/listExpense'); 
    }
}
