<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Model\EcCaracteristicaModelo;

class EcCaracteristicaModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EcCaracteristicaModelo::truncate();
        EcCaracteristicaModelo::create([
        	"idModelo"=>1,
        	"idCaracteristica"=>1,
        	"valor"=>"1 GB"
        	]);
        EcCaracteristicaModelo::create([
        	"idModelo"=>2,
        	"idCaracteristica"=>1,
        	"valor"=>"1.5 GB"
        	]);
        EcCaracteristicaModelo::create([
        	"idModelo"=>3,
        	"idCaracteristica"=>1,
        	"valor"=>"512 MB"
        	]);
        EcCaracteristicaModelo::create([
            "idModelo"=>4,
            "idCaracteristica"=>1,
            "valor"=>"1 GB"
            ]);
        EcCaracteristicaModelo::create([
            "idModelo"=>5,
            "idCaracteristica"=>1,
            "valor"=>"1.5 GB"
            ]);
        EcCaracteristicaModelo::create([
            "idModelo"=>6,
            "idCaracteristica"=>1,
            "valor"=>"2 GB"
            ]);
        EcCaracteristicaModelo::create([
            "idModelo"=>7,
            "idCaracteristica"=>1,
            "valor"=>"1 GB"
            ]);
        EcCaracteristicaModelo::create([
            "idModelo"=>8,
            "idCaracteristica"=>1,
            "valor"=>"1 GB"
            ]);
        EcCaracteristicaModelo::create([
            "idModelo"=>9,
            "idCaracteristica"=>1,
            "valor"=>"512 MB"
            ]);
    }
}
