<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //public $timestamps = false;

   	public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function motivo(){
        return $this->belongsTo('App\Models\Motivo');
    }
    public function direccion(){
        return $this->belongsTo('App\Models\Direccion');
    }
    public function organismos(){
        //return $this->belongsTo('App\Models\Organismo');
        return $this->belongsToMany('App\Models\Organismo')->withPivot('activo','observacion','created_at','updated_at')->withTimestamps();
    }
    public function municipio(){
        return $this->belongsTo('App\Models\Municipio');
    }
     public function parroquia(){
        return $this->belongsTo('App\Models\Parroquia');
    }
    public function estado(){
        return $this->belongsTo('App\Models\Estado');
    }
    public function cuadrantes(){
        return $this->belongsToMany('App\Models\Cuadrante')->withTimestamps();
    }
}
