<?php

use Illuminate\Database\Seeder;
use App\EcOrigen;
use Faker\Factory as Faker;

class EcOrigenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $faker = faker::create();

        EcOrigen::truncate();
        for ($i = 0; $i < 5; ++$i) {
            EcOrigen::create([
              'desc' => $faker->randomElement(array('pe', 'ar', 'cl')),
              'pais' => $faker->country(),
              'url' => $faker->url(),
            ]);
        }
    }
}
