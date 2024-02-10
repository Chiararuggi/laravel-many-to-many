<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_type = config("type");

        foreach ($array_type as $type_item) {
            $newType = new Type();
            $newType->fill($type_item);
            $newType->save();
        }
    }
    }

