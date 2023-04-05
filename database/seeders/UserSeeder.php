<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jesus Alejandro Inchicaque Arequipeño',
            'email' => 'jesus.9314@gmail.com',
            'password' => bcrypt('alienado123')
        ])->assignRole('Admin');
        User::factory(99)->create();
    }
}
