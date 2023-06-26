<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        $user = [
            'name' => 'Ayuob Ferwna',
            'email' => 'admin@info.com',
            'password'=>Hash::make('1416')
        ];

        User::create($user);
    }
}
