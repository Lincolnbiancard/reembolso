<?php

namespace App\Http\Controllers\Admin;

use \App\formulario;
use \App\Despesa;
use \App\Api\apiError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ExpenseController;
use App\Models\Historic;
use DB;
use App\Http\Requests\FormValidator;

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

    //PAGINA DE FORMULARIO DE CADASTRO DE PEDIDO DE REEMBOLSO
    public function index()
    {
        $data = $this->despesa->all();
        return view('admin.expense.formulario')->with('despesa', Despesa::all());
    }

    //LISTAGEM DE PEDIDOS
    public function listagem()
    {
        return view('admin.expense.listagem')->with('data', Formulario::all()); 
    }


    //CRIAR UM NOVO REGISTRO (com histórico)
    public function store(FormValidator $request)
    {

        DB::beginTransaction();

        $data = $request->all();

        $form = Formulario::create($data); 

        //Gravar histórico 
        $historic = Historic::create([
            'type'          => 'I',
            'cliente'       => $request->cliente, 
            'valor'         => $request->valor,
            'comprovante'   => $request->comprovante,
            'date'          => date('Ymd'),
            'user_id'       => $request->user_id,
        ]);

        if ($form && $historic) {
            
            DB::commit();
            
            $response = [
                'success' => true,
                'message' => 'Pedido de reembolso cadastrado com sucesso!'
            ];

        } else {
            
            DB::rollback();

            $response = [
                'success' => false,
                'message' => 'Falha ao cadastrar pedido!'
            ];

        }

        if ($response['success']) {
            return redirect('admin/formulario')
                                            ->with('success', $response['message']);


        return redirect()
                    ->back
                        ->width('error', $response['message']);
        }
    }


    //BUSCA FORMULARIO ÚNICO PELO ID
    public function show($id)
    {
        // $formulario = $this->formulario->find($id)->Despesas;
        // $data['formulario'] = $formulario; //Var $data recebe o array de formulario
        $data['formulario'] = Formulario::find($id);
        $data['despesas'] = Despesa::all();
        return view('admin.expense.atualizaFormulario', $data);
    }


    //ATUALIZA PASSANDO O ID 
    public function update(Request $request, $id)
    {

        $formularioData = $request->all();
        $formulario = $this->formulario->find($id);
        $formulario->update($formularioData);

        return redirect('admin/order');
    }

  
    //REMOVER REGISTRO
    public function destroy($id)
    {
        $formulario = $this->formulario->find($id);
        $formulario->delete();

        return redirect('admin/order'); 
    }


    //APROVAR PEDIDO DE REEMBOLSO 
    public function approve($id) {
        
    $result = $this->formulario
                        ->where('id', $id) 
                            ->update(
                                [
                                    'situacao' => 'Aprovado',
                                ]);

    return redirect('admin/order');
                                
    }


    //REPROVAR PEDIDO DE REEMBOLSO 
    public function disapprove($id) {
        
        $result = $this->formulario
                            ->where('id', $id) 
                                ->update(
                                    [
                                        'situacao' => 'Reprovado',
                                    ]);
    
        return redirect('admin/order');
                                    
        }

        //TELA DE PEDIDOS EM ABERTO PARA ANALISE DO GESTOR
        public function order() {

            $historics = $this->formulario
                                        ->get()->where('situacao', 'Aberto');
    
            return view('admin.expense.orders')->with('data', $historics); 
        }

        //TELA DE PEDIDOS EM APROVADOS
        public function approved() {

            $historics = $this->formulario
                                        ->get()->where('situacao', 'Aprovado');
    
            return view('admin.expense.approved')->with('data', $historics); 
        }

    

}
