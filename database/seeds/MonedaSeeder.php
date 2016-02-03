<?php

use Illuminate\Database\Seeder;

use App\Model\Moneda;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Moneda::truncate();

        Moneda::create({
          'id' => 1,
          'desc' => 'Sol',
          'codigo' => 'PEN'
        });
        Moneda::create({
          'id' => 2,
          'desc' => 'Dolar Estadounidense',
          'codigo' => 'USD'
        });
        Moneda::create({
          'id' => 3,
          'desc' => 'Peso Argentino',
          'codigo' => 'ARS'
        });
    }
}
