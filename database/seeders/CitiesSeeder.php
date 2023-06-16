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
        foreach (['krasnoyarsk' => 'Красноярск',
                  'vladivostok' => 'Владивосток',
                  'irkutsk' => 'Иркутск',
                  'barnaul' => 'Барнаул',
                  'tumen' => 'Тюмень',
                  'ekb' => 'Екатеринбург',
                  'perm' => 'Пермь',
                 ] as $code => $city)
        {
            \App\Models\City::factory()->create([
                'name' => $city,
                'code' => $code,
            ]);
        }
    }
}
