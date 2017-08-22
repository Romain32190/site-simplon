<?php

use Illuminate\Database\Seeder;
use App\Gestion;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $promo = ['morel','mouad','romain','maxime','raphael','emilie','elodie','florian','dimitri','franck','gregory','jordy','marco','oceane','julien','aurelien','jordan','victor'];

    		   for($i = 0;$i < count($promo); $i ++) {

    		      DB::table('users')->insert([
    		      	'userName' => $promo[$i],
    		      	'password' => bcrypt('azerty'),
    		      	'avatar' => 'default.png',
    		      	'remember_token' => 'null'
    		      ]);
    		   }
            //insert the default gestion entry
            Gestion::create([
                'image' => 'images/bi.png',
                'philosophie' => 'la philosophie',
                'programme' => 'le programme',
            ]);
        }



}
