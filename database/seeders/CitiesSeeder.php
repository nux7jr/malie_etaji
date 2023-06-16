<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Красноярск',
                  'Владивосток',
                  'Иркутск',
                  'Барнаул',
                  'Тюмень',
                  'Екатеринбург',
                  'Пермь',
                 ] as $city)
        {
            \App\Models\City::factory()->create([
                'name' => $city,
            ]);
        }
    }
}
