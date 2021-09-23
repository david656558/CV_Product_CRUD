<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Admin',
            'access' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => '2021-09-18 14:02:02',
            'password' => Hash::make('password'),
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(10)->create();
    }
}
