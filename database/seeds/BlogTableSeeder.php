<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $faker = \Faker\Factory::create('fr-FR');
        $limit = 50;

        for($i = 0; $i < $limit; $i ++) {
        	DB::table('blog')->insert([
        		'titre' => $faker->sentence,
        		'article' => $faker->Text,
        		'auteur' => $faker->numberBetween($min=0, $max = 10),
        		'note' => $faker->numberBetween($min=0, $max = 10),
        	]);
        }
    }
}
