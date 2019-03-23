<?php

use Illuminate\Database\Seeder;

class PedidoTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('formularios')->insert(
            [
                [
                    'cliente'       => 'Laura',
                    'data'          => date('Ymd'),
                    'valor'         => 25.50,
                    'despesa_id'    => '["1","2"]',
                ],
                [
                    'cliente'       => 'Marcos',
                    'data'          => date('Ymd'),
                    'valor'         => 18.55,
                    'despesa_id'    => '["1","3"]',
                ],
                [
                    'cliente'       => 'Roberta',
                    'data'          => date('Ymd'),
                    'valor'         => 15.50,
                    'despesa_id'    => '["1"]',
                ],
                [
                    'cliente'       => 'Carlos',
                    'data'          => date('Ymd'),
                    'valor'         => 80,
                    'despesa_id'    => '["1","2", "3"]',
                ],
                [
                    'cliente'       => 'Marcelo',
                    'data'          => date('Ymd'),
                    'valor'         => 105.50,
                    'despesa_id'    => '["3","2"]',
                ],
        ]);
        
        }
    }

