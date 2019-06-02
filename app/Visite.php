<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    protected $fillable = [
        'date_visite', 'compteRendu',
    ];
    protected $table = 'visites';
    protected $primaryKey = 'idVisite';
    public $timestamps = false;
    public function echantillon()
    {
        return $this->hasMany('App\Echantillon', 'idEchantillon', 'idEchantillon');
    }
    public function praticien()
    {
        return $this->hasOne('App\Praticien');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}