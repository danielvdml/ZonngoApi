<?php

use Illuminate\Database\Seeder;
use App\EcCondicion;

class EcCondicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EcCondicion::truncate();
        EcCondicion::create([
          'id' -> 1,
          'tipo' -> 'Nuevo'
        ]);
        EcCondicion::create([
          'id' => 2,
          'tipo' => 'Usado'
        ]);
    }
}
