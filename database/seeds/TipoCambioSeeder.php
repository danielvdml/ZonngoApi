<?php

use Illuminate\Database\Seeder;
use App\Model\Moneda;
use App\Model\TipoCambio;
use Faker\Factory as Faker;

class TipoCambioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        TipoCambio::truncate();

        $faker = Faker::create();

        $idMonedas = array();
        foreach (Moneda::all() as $moneda) {
            $idMonedas[] = $moneda->id;
        }

        for ($i = 1; $i < count($idMonedas); $i++) {
          for ($j = 0; $j < count($idMonedas); $j++) {
            if ($i != $j) {
              TipoCambio::create([
                'idMoneda1' => $idMonedas[$i],
                'idMoneda2' => $idMonedas[$j],
                'equiv' => $faker->randomFloat(2, 0.1, 50)
              ]);
            }
          }
        }
    }
}
