<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_technology = config("technology");

        foreach ($array_technology as $technology_item) {
            $newTechnology = new Technology();
            $newTechnology->fill($technology_item);
            $newTechnology->save();
        }
    }
}


