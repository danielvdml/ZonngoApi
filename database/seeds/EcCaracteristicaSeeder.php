<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Model\EcCaracteristica;
class EcCaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EcCaracteristica::truncate();
        EcCaracteristica::create([
        	"id"=>1,
        	"desc"=>"RAM"
        	]);
        EcCaracteristica::create([
        	"id"=>2,
        	"desc"=>"CPU"
        	]);
        EcCaracteristica::create([
        	"id"=>3,
        	"desc"=>"Almacenamiento"
        	]);
    }
}
