<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => (string) Str::uuid(),
            'name' => 'Aang Wiadi',
            'email' => 'aang@gmail.com',
            'password' => Hash::make('Baracuda!#'), // Use custom password
            'remember_token' => Str::random(60), 
        ]);
    }
}
