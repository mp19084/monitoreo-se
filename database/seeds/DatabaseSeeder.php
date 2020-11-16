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
        // $this->call(UserSeeder::class);
<<<<<<< HEAD
        $this->call(VM17015Seeder::class);
        $this->call(PruebaSeeder::class);
        $this->call(MP19084Seeder::class);
=======
        //$this->call(VM17015Seeder::class);
>>>>>>> 5e1c99800782035f1abc7655a724be2ab1fca146
        $this->call(AL13013Seeder::class);
        $this->call(GR09071Seeder::class);

    }
}
