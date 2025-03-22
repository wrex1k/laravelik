<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@ukf.sk',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dávid Držík',
                'email' => 'david.drzik@ukf.sk',
                'password' => Hash::make('456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jozef Kapusta',
                'email' => 'jkapusta@ukf.sk',
                'password' => Hash::make('789'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
