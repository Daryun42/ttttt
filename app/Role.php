<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //protected $table = 'roles';
    //protected $primaryKey = 'idRole';
    public $timestamps = false;
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}