<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Asegúrate de que exista el modelo Category

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Automotive', 'Appliance', 'Comercial'];

        foreach ($categories as $cat) {
            Category::create(['name' => $cat]);
        }
    }
}
