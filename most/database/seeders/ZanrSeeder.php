<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZanrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zanrovi = [
            'Roman',
            'Istorijski',
            'Ljubavni',
            'Misterija',
        ];

        foreach ($zanrovi as $zanr) {
            \App\Models\Zanr::create([
                'zanr' => $zanr,
            ]);
        }
    }
}
