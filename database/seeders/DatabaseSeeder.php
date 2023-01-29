<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@test.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'username' => 'administrator',
            'email' => 'administrator@test.com',
        ]);

        Category::insert([
            ['name' => 'Vape'],
            ['name' => 'Vape Juice'],
        ]);
    }
}
