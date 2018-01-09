<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_Coche extends Authenticatable
{
    use Notifiable;

    protected $table = 'users_coche';
    protected $fillable = [
        'user_id', 'serie_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function coche()
    {
        return $this->belongsTo('App\Coche');
    }


}
