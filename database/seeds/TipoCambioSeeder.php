<?php

use Illuminate\Database\Seeder;
use App\Model\Moneda;

use Faker\Factory as Faker;

class TipoCambioSeeder extends Seeder
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

        $idMonedas = array();
        foreach (Moneda::all() as $moneda) {
          $idMonedas[] = $moneda->id;
        }
    }
}
