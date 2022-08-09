<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::factory()->create([
            'name' => 'ali_mansoura',
            'email' => 'ali_mansoura@gmail.com',
            'email_verified_at'=>now(),
            'password' => '$2y$10$nEt49pO9OXkZB.KQtVwMJef7ZtsyjSNl0zMcfeCHf5kiUZP1F99Y2',
            'remember_token'=> Str::random(10),
            'role'=>'super',
         ]);
    }
}
