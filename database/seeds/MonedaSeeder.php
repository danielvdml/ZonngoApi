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

        Moneda::create([
          'desc' => 'Sol',
          'codigo' => 'PEN'
        ]);
        Moneda::create([
          'desc' => 'Dolar Estadounidense',
          'codigo' => 'USD'
        ]);
        Moneda::create([
          'desc' => 'Peso Argentino',
          'codigo' => 'ARS'
        ]);
    }
}
