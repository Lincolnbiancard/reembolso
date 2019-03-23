<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        User::create (
            
                [
                    'name'      => 'Usuário Admin',
                    'email'     => 'admin@admin',
                    'password'  =>  bcrypt('12345678'),
                    'group'     => 'admin'
                ],
                );
    }
}
