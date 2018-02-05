<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarreraRegistro extends Model
{
    //
    protected $table = 'carreras_registros';
    protected $fillable = ['id','carrera_id','velocidad','revoluciones','temperatura'];
    protected $primaryKey = 'id';


    public function carreraregistro()
    {
        return $this->belongsTo('App\Carrera');
    }
}
