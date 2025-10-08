<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Luiz Colombo',
            'email' => 'luiz@teste.com',
            'password' => bcrypt('123456'), // Ensure to hash the password

        ]);
    }
}
