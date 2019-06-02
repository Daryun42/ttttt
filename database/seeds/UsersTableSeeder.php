<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $adminRole = Role::where('nom','admin')->first();
        $visiteurMedicauxRole = Role::where('nom','visiteur_medicaux')->first();

        $admin = User::create([
            'nom' => 'Admin',
            'prenom' => 'Admin',
            'ville' => 'LYON',
            'cpostal' => '69000',
            'rue' => '4 Rue Charles Peguy',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
        $visiteurMedicaux = 
        User::create([
            'nom' => 'Washington',
            'prenom' => 'John',
            'ville' => 'NIMES',
            'cpostal' => '30900',
            'rue' => '48 Galerie Richard Wagner',
            'email' => 'Washington.John@gmail.com',
            'password' => bcrypt('test')
        ]);
        $visiteurMedicaux2 =
        User::create([
            'nom' => 'Trabosas',
            'prenom' => 'Josh',
            'ville' => 'Lyon',
            'cpostal' => '69000',
            'rue' => '18 Rue de la mongolfiere',
            'email' => 'Trabosas@gmail.com',
            'password' => bcrypt('test')
        ]);
        
        $admin->roles()->attach($adminRole);
        $visiteurMedicaux->roles()->attach($visiteurMedicauxRole);
        $visiteurMedicaux2->roles()->attach($visiteurMedicauxRole);
    }
}