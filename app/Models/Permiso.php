<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Permiso extends Model
{
    protected $table = 'permisos';
    protected $fillable = ['user_id', 'puesto_id', 'usuario_id', 'type', 'fecha_start', 'fecha_end'];

    public function puesto()
    {
    	return $this->belongsTo('App\Models\Puesto');
    }
    
    public static function getPermiso($user,$inicio,$fin,$puestoId)
    {
    	return Permiso::where('user_id', '=', $user)->where('type', '=', 'p')
        ->where(function ($query) use($inicio,$fin) {
             $query->where('fecha_start','=',$inicio)
             ->Where('fecha_end','=',$fin);
        })->where('puesto_id','=',$puestoId)->first();
    }

    public static function getPermisoTurno($user, $inicio, $fin)
    {
        return Permiso::where('user_id', '=', $user)->where('type', '=', 't')
        ->where(function ($query) use($inicio,$fin) {
             $query->where('fecha_start','=',$inicio)
             ->Where('fecha_end','=',$fin);
        })->first();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
