<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
        ]);

        $this->call([
            DocumentSeeder::class,
            TemplateSeeder::class,
            SettingSeeder::class
        ]);
    }
}
