<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Model\EcCategoria;
class EcCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EcCategoria::truncate();
        EcCategoria::create([
        	"id"=>1,
        	"desc"=>"Celulares"
        	]);
        EcCategoria::create([
        	"id"=>2,
        	"desc"=>"Tablets"
        	]);
        EcCategoria::create([
        	"id"=>3,
        	"desc"=>"Laptops"
        	]);

    }
}
