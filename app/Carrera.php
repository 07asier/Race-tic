<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    protected $table = 'carreras';
    protected $fillable = ['id_carrera','n_serie','usuario_id','velocidad','revoluciones','temperatura'];
    protected $primaryKey = 'id_carrera';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function coche()
    {
        return $this->belongsTo('App\Coche');
    }
}
