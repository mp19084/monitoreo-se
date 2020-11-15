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
        //$this->call(VM17015Seeder::class);
        $this->call(AL13013Seeder::class);
<<<<<<< HEAD
=======
        $this->call(GR09071Seeder::class);

>>>>>>> 5543f09... Preparacion Asignacion03
    }
}