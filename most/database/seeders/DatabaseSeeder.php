<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\User::truncate();
       // \App\Models\Knjiga::truncate();
       // \App\Models\Pisac::truncate();
        //\App\Models\Zanr::truncate();
        
        \App\Models\User::factory()->create([
            'name' => 'Zorana',
            'email' => 'zorana@gmail.com',
            'password' => bcrypt('zorana123')
        ]);
        $this->call([
            PisacSeeder::class,
            ZanrSeeder::class,
            KnjigaSeeder::class,
       ]);
    }
}
