<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $table = 'coches';
    protected $fillable = ['num_serie','user_id','marca','motor','modelo','mensaje'];
    protected $primaryKey = 'num_serie';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function carreras()
    {
        return $this->hasMany('App\Carrera');
    }

}

