<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // USERS
        DB::table('users')->insert([
            'firstname' => "Geoffrey",
            'lastname' => "Frioli",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'omni@omni.com',
            'password' => bcrypt('omni31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Simon",
            'lastname' => "Darmandieu",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'simon@simon.com',
            'password' => bcrypt('simon31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Vanessa",
            'lastname' => "Roux",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'roux@roux.com',
            'password' => bcrypt('roux31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Christopher",
            'lastname' => "Lenoir",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'ledoc@ledoc.com',
            'password' => bcrypt('ledoc31')
        ]);

        DB::table('users')->insert([
            'firstname' => "David",
            'lastname' => "Journo",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'dada@dada.com',
            'password' => bcrypt('dada31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Marion",
            'lastname' => "Zurcher",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'zuchero@zuchero.com',
            'password' => bcrypt('zuzu31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Guillaume",
            'lastname' => "Binant",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'gyozmo@gyozmo.com',
            'password' => bcrypt('gyozmo31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Philippe",
            'lastname' => "Pereira",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'pepe@pepe.com',
            'password' => bcrypt('pepe31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Simon",
            'lastname' => "Roger",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'roger@roger.com',
            'password' => bcrypt('roger31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Edmond",
            'lastname' => "De Tournadre",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'ed@ed.com',
            'password' => bcrypt('ed31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Valentin",
            'lastname' => "Janvier",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'val@val.com',
            'password' => bcrypt('val31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Clément",
            'lastname' => "Scherrer",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'groutch@groutch.com',
            'password' => bcrypt('groutch31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Rachid",
            'lastname' => "Mallaev",
            'promo' => "Saint-Gaudens Promo#2",
            'email' => 'ra@ra.com',
            'password' => bcrypt('ra31')
        ]);

        DB::table('users')->insert([
            'firstname' => "Cyril",
            'lastname' => "Denoyelle",
            'promo' => "Saint-Gaudens Promo#1",
            'email' => 'cyril@cyril.com',
            'password' => bcrypt('cyril31')
        ]);


        //CATEGORIES
        DB::table('categories')->insert([
            'name' => "Culture Tech"
        ]);

        DB::table('categories')->insert([
            'name' => "Développement"
        ]);

        DB::table('categories')->insert([
            'name' => "Data"
        ]);

        DB::table('categories')->insert([
            'name' => "Système et réseaux"
        ]);

        DB::table('categories')->insert([
            'name' => "Compétences"
        ]);

        DB::table('categories')->insert([
            'name' => "Codes de l'entreprise"
        ]);

        DB::table('categories')->insert([
            'name' => "Divers"
        ]);
    }
}
