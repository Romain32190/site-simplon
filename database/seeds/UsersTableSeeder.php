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
                'philosophie' => 'Entreprise de l’économie sociale et solidaire (agrément ESUS), Simplon.co est un réseau de « fabriques » (écoles) qui propose des formations gratuites pour les apprenant.e.s et intensives pour devenir développeur.se de sites web et d’applications mobiles, intégrateur.trice, référent numérique, datartisan, e-commerçant... Entreprise de l’économie sociale et solidaire (agrément ESUS), Simplon.co est un réseau de « fabriques » (écoles) qui propose des formations gratuites pour les apprenant.e.s et intensives pour devenir développeur.se de sites web et d’applications mobiles, intégrateur.trice, référent numérique, datartisan, e-commerçant... Entreprise de l’économie sociale et solidaire (agrément ESUS), Simplon.co est un réseau de « fabriques » (écoles) qui propose des formations gratuites pour les apprenant.e.s et intensives pour devenir développeur.se de sites web et d’applications mobiles, intégrateur.trice, référent numérique, datartisan, e-commerçant',
                'programme' => 'Entreprise de l’économie sociale et solidaire (agrément ESUS), Simplon.co est un réseau de « fabriques » (écoles) qui propose des formations gratuites pour les apprenant.e.s et intensives pour devenir développeur.se de sites web et d’applications mobiles, intégrateur.trice, référent numérique, datartisan, e-commerçant... Entreprise de l’économie sociale et solidaire (agrément ESUS), Simplon.co est un réseau de « fabriques » (écoles) qui propose des formations gratuites pour les apprenant.e.s et intensives pour devenir développeur.se de sites web et d’applications mobiles, intégrateur.trice, référent numérique, datartisan, e-commerçant... Entreprise de l’économie sociale et solidaire (agrément ESUS), Simplon.co est un réseau de « fabriques » (écoles) qui propose des formations gratuites pour les apprenant.e.s et intensives pour devenir développeur.se de sites web et d’applications mobiles, intégrateur.trice, référent numérique, datartisan, e-commerçant...',
            ]);
        }



}
