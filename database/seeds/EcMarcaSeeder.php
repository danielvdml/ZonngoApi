<?php

use Illuminate\Database\Seeder;
use App\Model\EcMarca;

class EcMarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        EcMarca::truncate();
        EcMarca::create([
            'id' => 1,
            'desc' => 'Samsung',
            ]);
        EcMarca::create([
            'id' => 2,
            'desc' => 'Nokia',
            ]);
        EcMarca::create([
            'id' => 3,
            'desc' => 'Apple',
            ]);
    }
}
