<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = 'puestos';
    protected $fillable = ['nombre', 'ip', 'descripcion'];


    public function users()
    {
    	return $this->hasMany('App\Models\User');
    }
    public function permisos()
    {
    	return $this->hasMany('App\Models\Permiso');
    }
}
