<?php

use Illuminate\Database\Seeder;
use App\Medicament;
class MedicamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicament::truncate();
        Medicament::create([
            'nomMedicament' => 'Doliprane', 
            'prixEchantillon' => '1.70', 
        ]);
    }
}
