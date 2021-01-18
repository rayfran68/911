<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=["Titular", "Cuerpo", "Foto", "departamento_id"];

    public function user()
    {
        return $this->belongsTo('App/User');
    }
    public function departamento()
    {
        return $this->belongsTo('App/Departamento');
    }

}
