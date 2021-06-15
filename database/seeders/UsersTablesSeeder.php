<?php

namespace Database\Seeders;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'admin',
            'email'    => 'admin@gmail.com',
            'password'   =>  Hash::make('admin@123'),
        //    'remember_token' =>  str_random(10),
        ]);
    }
}
