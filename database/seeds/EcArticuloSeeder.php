<?php

use Illuminate\Database\Seeder;
use App\Model\EcModelo;
use App\Model\Moneda;
use App\Model\EcOrigen;
use App\Model\EcCondicion;
use App\Model\EcArticulo;
use Faker\Factory as Faker;

class EcArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $nroModels = EcModelo::all()->count();

        $origens = array();
        foreach (EcOrigen::all() as $origen) {
            $origens[] = $origen->id;
        }

        $condicions = array();
        foreach (EcCondicion::all() as $condicion) {
            $condicions[] = $condicion->id;
        }

        $monedas = array();
        foreach (Moneda::all() as $moneda) {
            $monedas[] = $moneda->id;
        }

        for ($i = 0; $i < 100; ++$i) {
            EcArticulo::create([
              'titulo' => $faker->text(100),
              'link' => $faker->url(),
              'precio' => $faker->randomFloat(2, 70, 3000),
              'estado' => $faker->text(45),
              'imagen' => $faker->imageUrl(600, 300),
              'fecha' => $faker->date('Y-m-d', 'now'),
              'idModelo' => $faker->numberBetween(1, $nroModels),
              'idOrigen' => $faker->randomElement($origens),
              'idCondicion' => $faker->randomElement($condicions),
              'idMoneda' => $faker->randomElement($monedas)
            ]);
        }
    }
}
