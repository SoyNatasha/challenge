<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class clientesSeeder extends Seeder
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
 

         foreach (range(1,3) as $index) 
         {
	        DB::table('clientes')->insert([
	            'nombre' => $faker->name,
	            'apellido' => $faker->lastName,
	            'telefono' => $faker->phoneNumber,
	        ]);
	    }
    }
}
