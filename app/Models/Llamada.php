<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Llamada extends Model
{
    

   public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

   public static function GetTurno($user, $fechaInicio, $fechaFin){
   	 return DB::table('llamadas')
   	->where('user_id','=',$user)
   	->where(function ($query) use($fechaInicio,$fechaFin) {
                $query->where('created_at','>=',$fechaInicio)
                      ->Where('created_at','<=',$fechaFin);
            })
   	->first();
   }

   public static function SetLlamada($user, $fechaInicio, $fechaFin, $increment){
    DB::table('llamadas')
    ->where('user_id','=',$user)
    ->where(function ($query) use($fechaInicio,$fechaFin) {
                $query->where('created_at','>=',$fechaInicio)
                      ->Where('created_at','<=',$fechaFin);
            })
    ->increment($increment);
   }

}
