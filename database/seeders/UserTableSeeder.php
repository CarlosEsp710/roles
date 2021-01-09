<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Carlos Espejel',
            'email' => 'c@admin.com',
            'password' => bcrypt('12345678')
        ]);
        \App\Models\User::factory(20)->create();
    }
}
