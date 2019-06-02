<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echantillon extends Model
{
    protected $table = 'echantillons';
    protected $primaryKey = 'idEchantillon';
    public $timestamps = false;

    public function medicament()
    {
        return $this->hasMany('App\Medicament', 'idMedicament', 'idMedicament');
    }
    public function visite()
    {
        return $this->belongsTo('Visite', 'idEchantillon');
    }
}
