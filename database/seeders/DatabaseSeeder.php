<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //user1@luga.com
        //user@123

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@luga.com',
            'password'=>Hash::make('admin@123'),
            'role'=>'admin',
        ]);
    }
}
