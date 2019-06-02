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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VisitesTableSeeder::class);
        $this->call(PraticienTableSeeder::class);
        $this->call(MedicamentsTableSeeder::class);
        $this->call(EchantillonsTableSeeder::class);
    }
}
