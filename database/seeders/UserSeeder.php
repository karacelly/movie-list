<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => '$2y$10$FKM0aM5SJZViF82ZwiD95ekKx/CJ58aBrwnQ6WMEW81QYevd4gtUG', // admin123
            'role' => 1,
        ]);

        User::create([
            'username' => 'kesya',
            'email' => 'kesya@mail.com',
            'password' => '$2a$12$pvaHKbB5cHTsFNEMeH/3IuxENR/P9Mj4tfPaXFx2btBIJ154nA5yS
            ',
            'role' => 0,
        ]);
    }
}
