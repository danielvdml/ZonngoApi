<?php

use Illuminate\Database\Seeder;
use App\Model\EcCategoria;

class EcCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        EcCategoria::truncate();
        EcCategoria::create([
            'id' => 1,
            'desc' => 'Celulares',
        ]);
        EcCategoria::create([
            'id' => 2,
            'desc' => 'Tablets',
        ]);
        EcCategoria::create([
            'id' => 3,
            'desc' => 'Laptops',
        ]);
    }
}
