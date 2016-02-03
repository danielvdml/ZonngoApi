<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // $this->call(UserTableSeeder::class);
        $this->call(EcOrigenSeeder::class);
        $this->call(EcCondicionSeeder::class);
        $this->call(MonedaSeeder::class);
        $this->call(TipoCambioSeeder::class);
        $this->call(EcCategoriaSeeder::class);
        $this->call(EcMarcaSeeder::class);
        $this->call(EcCaracteristicaSeeder::class);
        $this->call(EcCaracteristicaModeloSeeder::class);
        $this->call(EcModeloSeeder::class);
        $this->call(EcArticuloSeeder::class);
        $this->call(EcEstadisticaSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    }
}
