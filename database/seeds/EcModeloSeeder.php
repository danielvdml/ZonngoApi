<?php

use Illuminate\Database\Seeder;
use App\Model\EcModelo;

class EcModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        EcModelo::truncate();
        EcModelo::create([
            'id' => 1,
            'idMarca' => 1,
            'idCategoria' => 1,
            'desc' => 'Samsung Galaxy S6',
            ]);
        EcModelo::create([
            'id' => 2,
            'idMarca' => 1,
            'idCategoria' => 1,
            'desc' => 'Samsung Galaxy S6 edge',
            ]);
        EcModelo::create([
            'id' => 3,
            'idMarca' => 1,
            'idCategoria' => 1,
            'desc' => 'Samsung Galaxy S4',
            ]);
        EcModelo::create([
            'id' => 4,
            'idMarca' => 2,
            'idCategoria' => 1,
            'desc' => 'Nokia Lumina 635',
            ]);
        EcModelo::create([
            'id' => 5,
            'idMarca' => 2,
            'idCategoria' => 1,
            'desc' => 'Nokia 110',
            ]);
        EcModelo::create([
            'id' => 6,
            'idMarca' => 2,
            'idCategoria' => 1,
            'desc' => 'Nokia 230',
            ]);
        EcModelo::create([
            'id' => 7,
            'idMarca' => 3,
            'idCategoria' => 3,
            'desc' => 'Iphone 4s 32gb',
            ]);
        EcModelo::create([
            'id' => 8,
            'idMarca' => 3,
            'idCategoria' => 1,
            'desc' => 'Iphone 4s 16gb',
            ]);
        EcModelo::create([
            'id' => 9,
            'idMarca' => 3,
            'idCategoria' => 1,
            'desc' => 'Iphone 6s',
            ]);
        EcModelo::create([
            'id' => 10,
            'idMarca' => 3,
            'idCategoria' => 3,
            'desc' => 'Apple Macbook Air 11.6',
            ]);
        EcModelo::create([
            'id' => 11,
            'idMarca' => 3,
            'idCategoria' => 3,
            'desc' => 'Apple MacBook Air 13.3',
            ]);
        EcModelo::create([
            'id' => 12,
            'idMarca' => 3,
            'idCategoria' => 3,
            'desc' => 'Apple MacBook Air 15.4',
            ]);
    }
}
