<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function post()
    {
        return $this->hasMany('App/post');
    }
}
