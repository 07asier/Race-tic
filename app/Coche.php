<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $table = 'coches';
    protected $fillable = ['num_serie','marca','motor','modelo','mensaje'];
    protected $primaryKey = 'num_serie';

    public function user()
    {
        return $this->hasMany('App\User_Coche');
    }


}

