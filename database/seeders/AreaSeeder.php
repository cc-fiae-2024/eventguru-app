<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::create(['id' => 1, 'name' => 'Schleswig-Holstein']);
        Area::create(['id' => 2, 'name' => 'Hamburg']);
        Area::create(['id' => 3, 'name' => 'Niedersachsen']);
        Area::create(['id' => 4, 'name' => 'Bremen']);
        Area::create(['id' => 5, 'name' => 'Nordrhein-Westfalen']);
        Area::create(['id' => 6, 'name' => 'Hessen']);
        Area::create(['id' => 7, 'name' => 'Rheinland-Pfalz']);
        Area::create(['id' => 8, 'name' => 'Baden-Württemberg']);
        Area::create(['id' => 9, 'name' => 'Bayern']);
        Area::create(['id' => 10, 'name' => 'Saarland']);
        Area::create(['id' => 11, 'name' => 'Berlin']);
        Area::create(['id' => 12, 'name' => 'Brandenburg']);
        Area::create(['id' => 13, 'name' => 'Mecklenburg-Vorpommern']);
        Area::create(['id' => 14, 'name' => 'Sachsen']);
        Area::create(['id' => 15, 'name' => 'Sachsen-Anhalt']);
        Area::create(['id' => 16, 'name' => 'Thüringen']);
    }
}
