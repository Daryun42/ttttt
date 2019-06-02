<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praticien extends Model
{
    protected $fillable = [
        'name', 'email', 'nom','prenom','ville','cpostal','rue',
    ];
    protected $table = 'praticiens';
    protected $primaryKey = 'idPraticien';
    public $timestamps = false;
    public function visite()
    {
        return $this->belongsTo('App\Visite');
    }
}