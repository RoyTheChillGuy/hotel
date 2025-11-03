<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hotel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Hotel::create([
        //     'name' => 'Tempest Hotel',
        //     'address' => 'Jl.Bolong',
        //     'phone' => '0812345678910',
        //     'email' => 'tempesthotel@example.com',
        //     'stars' => '4',
        //     'check_in_time' => '2025-04-05',
        //     'check_out_time' => '2025-04-06',
        // ]);

        // Hotel::create([
        //     'name' => 'GenZ Hotel',
        //     'address' => 'Jl.Bareng Kamu',
        //     'phone' => '0812345678910',
        //     'email' => 'genzhotel@example.com',
        //     'stars' => '5',
        //     'check_in_time' => '2025-04-01',
        //     'check_out_time' => '2025-04-030',
        // ]);

        // Hotel::create([
        //     'name' => 'Boomers Hotel',
        //     'address' => 'Jl.Sendirian',
        //     'phone' => '0812345678910',
        //     'email' => 'boomershotel@example.com',
        //     'stars' => '3',
        //     'check_in_time' => '2025-04-09',
        //     'check_out_time' => '2025-04-10',

        User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => bcrypt('password123'),
]);


    // \App\Models\Hotel::factory()->count(100)->create();


    }
}
