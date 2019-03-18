<?php

use Illuminate\Database\Seeder;

class FormularioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Cria 10 produtos baseado no array do ProductFactory 
        factory(\App\Formulario::class, 10)->create(); 
    }
}
