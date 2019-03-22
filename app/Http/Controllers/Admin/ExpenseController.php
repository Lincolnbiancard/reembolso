<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\formulario;
use \App\Despesa;

class ExpenseController extends Controller
{
    public function index() {
        $expense = json_decode(auth()->user()->expense);//Tudo sobre o usuário logado
        $result = count($expense); 
        $userLogado = $result ? $result : 'sem user';

        return view('admin.expense.index', compact('userLogado'));
    }

    public function order() {

        dd($historics = auth()
                        ->user()
                            ->historics()
                                ->get())
                                    ;

        return view('admin.expense.orders')->with('data', Formulario::all()); 
    }
}
