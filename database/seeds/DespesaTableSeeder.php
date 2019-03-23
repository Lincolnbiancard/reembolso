<?php

use Illuminate\Database\Seeder;
use App\Despesa;
class DespesaTableSeeder extends Seeder
{
    
    public function run()
    {

        DB::table('despesas')->insert(
            [
                [
                    'tipos'      => 'Gasolina',
                    'descricao'     => 'Gasolina viagem a traballho',
                ],
                [
                    'tipos'      => 'Almoço',
                    'descricao'     => 'Almoço em outra cidade a trabalho',
                ],
                [
                    'tipos'      => 'Hotel Pernoite',
                    'descricao'     => 'Pernoite em hotel a trabalho',
                ],
        ]);
        
        }
    
}
