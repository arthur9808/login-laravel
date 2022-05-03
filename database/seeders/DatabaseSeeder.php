<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        \App\Models\User::updateOrCreate([
            "email" => "admin@gmail.com"
        ],
        [
            "name" => "Admin",
            "password" => Hash::make('password'),
        ]);

        \App\Models\User::factory()->count(10)->create();
    }
}
