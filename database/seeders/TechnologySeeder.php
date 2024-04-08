<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       
        $techonology_data = ['HTML5', 'CSS3', 'Javascript ES5', 'VueJS 3', 'Axios','RESTful Api','SQL','PHP','Json' ];

        foreach ($techonology_data as $technology){
            $technology = new Techonolgy;
            $technology->label = $techonology_data;
            $technology->colre = $faker->hexColor();
            $technology->save();            
        }
    }
}

