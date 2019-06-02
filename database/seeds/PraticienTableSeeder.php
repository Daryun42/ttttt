<?php

use Illuminate\Database\Seeder;
use App\Praticien;
class PraticienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Praticien::truncate();
        Praticien::create([
            'nom' => 'Bobby', 
            'prenom' => 'Fallon', 
            'ville' => 'NIMES',
            'cpostal' => '30000',
            'rue' => '12 Rue du Cheval Vert',
        ]);
    }
}
