<?php

use Illuminate\Database\Seeder;
use App\Model\EcEstadistica;
use App\Model\EcModelo;
use Faker\Factory as Faker;

class EcEstadisticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $nroModels = EcModelo::all()->count();

        for ($i = 0; $i < 200; $i++) {
          $nuevos = $faker->numberBetween(1, 100);
          $disp = $faker->numberBetween($nuevos, 200);
          EcEstadistica::create([
            'fecha' => $faker->date('Y-m-d', 'now'),
            'cantArtNuevos' => $nuevos,
            'cantArtDisp' => $disp,
            'avg' => $faker->randomFloat(2, 300, 3000),
            'min' => $faker->numberBetween(60,200),
            'max' => $faker->numberBetween(200, 3000),
            'ds' => $faker->randomFloat(2, 20, 150),
            'idModelo' => $faker->numberBetween(1, $nroModels)
          ]);
        }
    }
}
