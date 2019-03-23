<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\formulario;
use \App\Despesa;

class ExpenseController extends Controller
{
    public function index() {

        $formulario = Formulario::all()
            ->where('situacao', 'Aberto'); //Pedidos em aberto 
        $result = count($formulario);
     
        $pedidos = $result ? $result : 'sem valor';

        return view('admin.expense.index', compact('pedidos'));
    }

    public function order() {

        dd($historics = auth()
                        ->user()
                            ->historics()
                                ->get())
                                    ;

        return view('admin.expense.orders')->with('data', Formulario::all()); 
    }

    public function home() {
        return view('admin.home');
    }

    
}
