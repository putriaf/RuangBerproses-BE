<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'Admin - Tim Konseling',
            'username' => 'konselingrb',
            'email' => 'konselingrb@mail.com',
            'password' => Hash::make('admin123'),
            'role' => '1',
            'no_telp' => '08718718181',
            'jk' => 'L',
            'tgl_lahir' => '27/09/2001'
        ]);
    }
}