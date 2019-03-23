<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DespesaTableSeeder::class);
        $this->call(PedidoTableSeeder::class);
    }
}
