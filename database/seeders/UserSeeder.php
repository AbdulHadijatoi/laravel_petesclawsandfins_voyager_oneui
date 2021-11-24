<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Role::truncate();
        User::truncate();
        
        $users = [
            ['name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('11111111'),
            'role_id'=> 1,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Candidate',
            'email' => 'candidate'.'@gmail.com',
            'password' => Hash::make('11111111'),
            'role_id'=> 2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Investor',
            'email' => 'investor'.'@gmail.com',
            'password' => Hash::make('11111111'),
            'role_id'=> 3,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Partner',
            'email' => 'partner@gmail.com',
            'password' => Hash::make('11111111'),
            'role_id'=> 4,
            'created_at' => now(),
            'updated_at' => now(),
            ]
        ];

        $roles = [
            ['role' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'role' => 'Candidate',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'role' => 'Investor',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'role' => 'Partner',
            'created_at' => now(),
            'updated_at' => now(),
            ]
        ];
        Role::insert($roles);
        User::insert($users);

    }
}
