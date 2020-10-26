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
        $users = [
            [
                'id'             => 1,
                'name'           => '李亨利',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$TASeU4vTSNoHgIAvjIzVfu4k3cGDOFoVqcSUK1uLJSpLRGnctek8W',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
