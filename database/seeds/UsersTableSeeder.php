<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        User::create (
        [
            'name'      => 'Juliana Franco',
            'email'     => 'juliana@hotmail.com',
            'password'  =>  bcrypt('12345678'),
            'group'     => 'admin'
        ]);
    }
}
