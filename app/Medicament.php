<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $fillable = [
        'nomMedicament', 'prixEchantillon',
    ];
    protected $table = 'medicaments';
    protected $primaryKey = 'idMedicament';
    public $timestamps = false;

    public function echantillon()
    {
        return $this->belongsTo('Echantillon', 'idMedicament');
    }
}