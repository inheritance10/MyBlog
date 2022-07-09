<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

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

         /*\App\Models\User::factory()->create([
             'name' => 'Ali cebeci',
             'email' => 'ali552001@gmail.com',
             'password' => Hash::make('151001'),
             'role' => 'admin'
         ]);*/
    }
}
