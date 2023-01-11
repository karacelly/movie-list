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
            'password' => '$2a$12$MN7ba.2z9cYXSucL8rPKSeqn.WPVbABGgWeJdNyg2fcA.vZk63kBK',
            'image' => 'https://o-cdn-cas.sirclocdn.com/parenting/images/Karina_4.width-1000.jpg',
            'role' => 0,
        ]);
        User::create([
            'username' => 'frisco',
            'email' => 'frisco@mail.com',
            'password' => '$2y$10$FKM0aM5SJZViF82ZwiD95ekKx/CJ58aBrwnQ6WMEW81QYevd4gtUG', // admin 123
            'role' => 0,
        ]);
    }
}
