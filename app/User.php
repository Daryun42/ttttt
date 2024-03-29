<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','nom','prenom','ville','cpostal','rue',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table = 'visiteurs';
    // protected $primaryKey = 'idVisiteur';
    public $timestamps = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    public function hasAnyRoles($roles)
    {
        return null != $this->roles()->whereIn('nom', $roles)->first();
    }
    public function hasAnyRole($role)
    {
        return null != $this->roles()->where('nom', $role)->first();
    }

    //Renvoie les visites
    public function visites()
    {
        return $this->hasMany('App\Visite', 'idVisiteur', 'id');
    }
}
