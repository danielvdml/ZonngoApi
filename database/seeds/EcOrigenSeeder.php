<?php

use Illuminate\Database\Seeder;
use App\EcOrigen;

class EcOrigenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EcOrigen::truncate();
        EcOrigen::create([

        ]);
    }
}
