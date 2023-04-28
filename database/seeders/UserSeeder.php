<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uuid = Str::uuid()->toString();
        //
        $user = [
            'id' => $uuid,
            'username' => 'PRADANA',
            'full_name' => 'Muhammad Fitrah Jaya Pradana',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'roles' => 'ADMIN',
            'image' => '',
            'remarks_user' => '-',
        ];

        User::insert($user);
    }
}
