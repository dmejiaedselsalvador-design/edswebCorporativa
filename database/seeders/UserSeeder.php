<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'luis.mejia',
            'email' => 'd.mejia@edssv.com',
            'password' => Hash::make('Us3r123'),
            'is_active' => 1, // asegúrate que ya agregaste este campo
        ]);

        // asignar rol (ejemplo)
        $user->assignRole('admin');
    }
}
