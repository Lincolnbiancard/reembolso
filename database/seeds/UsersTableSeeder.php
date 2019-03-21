<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        User::create ([
            'name'      => 'Lincoln Biancardi',
            'email'     => 'biancardilincoln@gmail.com',
            'password'  =>  bcrypt('134256AS'),
        ]);
    }
}
