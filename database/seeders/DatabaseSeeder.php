<?php

namespace Database\Seeders;
Use DB;
use App\Model\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        //Eloquent::unguard();
        $this->call(UsersTablesSeeder::class);
    }
}
