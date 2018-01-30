<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password','email_token','verified'
    ];
    protected $primaryKey = 'id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //verificacion del usuario
    public function verified()
    {
        $this->verified = 1;
        $this->email_token = null;
        $this->save();
    }

    //Relaciones con las otras tablas
    //Parte 1
    public function coches()
    {
        return $this->hasMany('App\Coche');
    }
    //Parte 1
    public function carreras()
    {
        return $this->hasMany('App\Carrera');
    }

}
