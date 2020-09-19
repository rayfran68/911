<?php

namespace App\Http\Controllers\Supervisores;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Contacto;
use App\Models\User;
use App\Models\Caso;
use App\Models\Direccion;
use App\Models\Cuadrante;
use Illuminate\Support\Facades\Auth;
use App\Models\Estado;
use App\Models\Organismo;
use App\Models\Motivo;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Llamada;
use App\Models\Puesto;
use App\Config;
use Illuminate\Support\Facades\DB;

//use Activity;

class SupervisoresController extends Controller
{
   
    public function index()
    {   //dd('index');
    	//$contacto = Contacto::with('')->orderBy('id','desc')->paginate(25);
        $contacto = Contacto::with('organismos')->orderBy('id','desc')->paginate(25);

        //$contacto = Organismo::with('contactos')->orderBy('id','desc')->paginate(25);
        //$organismos = Organismo::find($organismo);
        //$contacto = Contacto::find($id)->organismos()->get();
            //$org = $organismos->contactos()->with('motivo','user','direccion')->get();
                
        return view('supervisores.index', compact('contacto'));
    }
    public function edit()
    {
        //dd('sup');
    	$municipios = Municipio::all();
        $parroquias = Parroquia::all();
        //dd($parroquias);
        $organismoss = Organismo::all();
        $motivos = Motivo::all();
        $estados = Estado::all();

        $contacto = Contacto::all();
        $observacion = Contacto::find($id)->organismos()->wherePivot('contacto_id',$id)->get();
        //return $observacion;
        //pivot_observacion
        //pivot_activo
        //$casos = Caso::where('user_id',$user)->orderBy('id','desc')->first();
        return view('Cuadrantes',compact('contacto','user','casos','municipios','parroquias','motivos','organismoss','observacion','estados'));
    }
    public function update(Request $request, $id)
    {
    	$this->validate($request, [
            'telefono' => 'numeric',
            'cedula' => 'numeric',
            ]);
        
		$direccionh = $request->input('direccionh');//required
	    $observacion = $request->input('observacion');//required
	    $contactoh = $request->input('contactoh');//required
        $status = $request->input('status');//required

	    $phone = $request->input('telefono');//required
	    $nombre = $request->input('nombre');
	    $cedula = $request->input('cedula');
	    $apellido = $request->input('apellido');

	    $motivo = $request->input('motivo');//required
	    $cuadrante = $request->input('cuadrante');//required
	    $municipio = $request->input('municipio');
	    $parroquia =  $request->input('parroquia');
	    $ubicacion = $request->input('direccion');//required
	    $preferencia = $request->input('p_referencia');
	    $descripcion = $request->input('descripcion');
	    $organismo = $request->input('organismo');//required
	    $estado = $request->input('estado');//required

	    //return $request->all();//required   
        if ($status=='0') {
            //$observacion = Contacto::find($id)->organismos()->wherePivot('organismo_id',$organismoId)->first();
            $direccion = Direccion::find($direccionh);
            $direccion->despcricion = $descripcion;
            $direccion->ubicacion = $ubicacion;
            $direccion->preferencia = $preferencia;
            $direccion->observacion = $observacion;
            $direccion->save(); 
	        $date = Carbon::now(); //2015-01-01 00:00:00
    	    $contacto = Contacto::find($id);
    	    $contacto->nombre = $nombre;
    	    $contacto->apellido = $apellido;
    	    $contacto->cedula = $cedula;
    	    $contacto->telefono = $phone;
    	    $contacto->status = '1';
    	    //$contacto->type = '171';
    	    $contacto->fecha_at = $date;
	        $contacto->save();

    	    $user = Auth::id();
    	    $users = User::find($user);
    	    $users->contactos()->attach($contacto);

            if (isset($organismo)) 
            {
                foreach ($organismo as $organismoId) 
                {
                    $organismos = Organismo::find($organismoId);
                    $contacto->organismos()->attach($organismos,['activo'=>'0']);
                }
            }
            //organismos motivo
            if (isset($organismo)) 
            {
                foreach ($organismo as $organismoId) 
                {
                    $organismos = Organismo::find($organismoId);
                    $motivos->organismos()->attach($organismos);
                }
            }
            //organismos estado
            if (isset($organismo)) 
            {
                foreach ($organismo as $organismoId) 
                {
                    $organismos = Organismo::find($organismoId);
                    $estados->organismos()->attach($organismos);
                }
            }
           //organismos municipio
            if(isset($organismo)) 
            {
                foreach ($organismo as $organismoId) 
                {
                    $organismos = Organismo::find($organismoId);
                    $municipios->organismos()->attach($organismos);
                }
            }
           //organismos parroquia
            if($organismo && $parroquia) 
            {
                foreach ($organismo as $organismoId) 
                {
                    $organismos = Organismo::find($organismoId);
                    $parroquias->organismos()->attach($organismos);
                }
            }
            if($motivo && $municipio){
                $motivos = Motivo::find($motivo);
                $motivos->municipios()->attach($municipio);
            }
            if($motivo && $parroquia) 
            {
                $motivos = Motivo::find($motivo);
                $motivos->parroquias()->attach($parroquia);
            } 
            //activity()->log('supervision guardado'); 
            //Activity::log($users->name.' actualizó caso del registro Nº '.$id. ' a las '.$users->created_at.' en modulo de Supervisión');
        }
        return redirect('admin/supervisores/despacho');
    }
   
    public function busquedaDespacho(Request $request){
       
        if($request->input('opcion') == '5'){
            $messages = [
                'table_search.required' => 'Introdusca la Cedula del Operador en el campo Busqueda.',
                'fechaStar.required' => 'El Campo De: es necesario',
                'fechaEnd.required' => 'El campo Hasta: es necesario',
                'table_search.numeric' => 'Introdusca la cedula del Operador en el campo Busqueda.',
            ];  
            $this->validate($request,[
                'table_search' => 'required|numeric',
                'fechaStar' => 'required',
                'fechaEnd' => 'required',
                ],$messages);
        }


        $busqueda = $request->input('table_search');
        $opcion = $request->input('opcion');
        //return $fecha = $request->input('fecha');
        if ($opcion == '1') {
            //busqueda por telefono
            $contacto = Contacto::where('telefono','LIKE','%'.$busqueda.'%')->orderBy('id','desc')->paginate(25);
        }
        elseif ($opcion == '2') {
            //busqueda por nombre
            $contacto = Contacto::where('nombre','LIKE','%'.$busqueda.'%')->orderBy('id','desc')->paginate(25);
        }
        elseif ($opcion == '3') {
            //busqueda por estatus
            $contacto = Contacto::where('status', $busqueda)->orderBy('id','desc')->paginate(25);
        }
        elseif ($opcion == '4'){
            $uno = $request->fechaStar;
            $dos = $request->fechaEnd;
            $contacto = Contacto::where(function($query) use ($uno, $dos) {
                $query->whereDate('contactos.created_at', '>=', $uno)
                      ->whereDate('contactos.created_at', '<=', $dos);
            })->paginate(25);
        }
        elseif($opcion == '5'){

            $usuario = DB::table('users')->where('email', '=', $request->table_search)->first();

            $operador = $usuario;
            $cedula = $usuario->email;
            $uno = $request->fechaStar;
            $dos = $request->fechaEnd;
            $contacto = Contacto::where(function($query) use ($uno, $dos) {
                $query->whereDate('contactos.created_at', '>=', $uno)
                      ->whereDate('contactos.created_at', '<=', $dos);
            })
            ->whereHas('user', function ($query) use ($cedula) {
                $query->where('email', '=', $cedula);
            })->paginate(25);
           

            $llamadas = DB::table('users')->where('email', '=', $cedula)
            ->join('llamadas', 'users.id', '=', 'llamadas.user_id')
            ->where(function($query) use ($uno, $dos) {
                $query->whereDate('llamadas.created_at', '>=', $uno)
                      ->whereDate('llamadas.created_at', '<=', $dos);
            })->where(function($query) use ($uno, $dos) {
                $query->whereDate('llamadas.created_at', '>=', $uno)
                      ->whereDate('llamadas.created_at', '<=', $dos);
            })->get();

           //$total = count($contacto);
          //  dd($llamadas);
            $total_llamada = 0;
            if(count($llamadas) != 0){
                foreach ($llamadas as $call) {
                   $total_llamada = $total_llamada + $call->falsas + $call->sabotaje + $call->registradas + $call->informativas;
                   // $total_llamada->falsas = $total_llamada->falsas + $call->falsas;
                   // $total_llamada->sabotaje = $total_llamada->sabotaje + $call->sabotaje;
                   // $total_llamada->registradas = $total_llamada->registradas + $call->registradas;
                   // $total_llamada->informativas = $total_llamada->informativas + $call->informativas;
                }
              
            }
        
                               
            
            return view('supervisores.index', compact('contacto','cedula','total_llamada','usuario','operador'));

         }else{
            $contacto = Contacto::orderBy('id','desc')->paginate(25);
            return view('supervisores.index', compact('contacto'));
         }
        return view('supervisores.index', compact('contacto'));
    }

    public function monitoreo(){
     //    $persona = User::find(98);
     //    dd($persona->llamadas);
        $config = Config::where("name","=","monitoreo_supervisor")->first();
       // dd(Auth::user()->roles);
        if(!$config->value && Auth::user()->roles == 'supervisor'){
            return redirect('/');
        }
     // dd(KimActivity::users()->get());
        $usuarios= KimActivity::usersByHours(1)->get();
        $online = KimActivity::usersByMinutes(5)->get();


       // dd($usuarios);
       // dd($usuarios[0]->user->id);

        $datos = collect([]);
        //$datos->push($coleccion);
        //$datos->push($coleccion);
        //dd($datos);

        // for ($i=0; $i < count($usuarios); $i++) { 
        //      $user_id = $usuario->user->id;
        //      $llamada = Llamada::where('user_id','=',$user_id)->whereDate('created_at', '=', Carbon::today()->toDateString())->first();

        // }
      // dd($usuarios[0]);
    //   $prueba = Carbon::createFromTimestamp($usuarios[1]->last_activity)->diffForHumans();
     // dd($prueba);
        foreach ($usuarios as $usuario) {
            $actividad = Carbon::createFromTimestamp($usuario->last_activity)->toTimeString()." - ".Carbon::createFromTimestamp($usuario->last_activity)->diffForHumans();

            $puesto = Puesto::where('ip','=',$usuario->ip_address)->first();
            
          // dd($usuarios[1]->ip_address);
            $user_id = $usuario->user->id;
            if($usuario->user->roles == 'operador'){
                $llamada = Llamada::where('user_id','=',$user_id)->whereDate('created_at', '=', Carbon::today()->toDateString())->orderBy("id","desc")->first();

               
                if($llamada){
                    $total = $llamada->informativas + $llamada->registradas + $llamada->sabotaje + $llamada->falsas;
                    $matriz = array('llamada' => $llamada, 'usuario' => $usuario, 'total' => $total, 'actividad' => $actividad, 'puesto' => $puesto);

                }else{
                    $matriz = array('llamada' => false, 'usuario' => $usuario, 'actividad' => $actividad, 'puesto' => $puesto);
                }
                    $datos->push($matriz);
            }else{
                $caso = Caso::where('user_id','=', $user_id)->whereDate('created_at', '=', Carbon::today()->toDateString())->first();
                $organismo = Organismo::where('id', '=', $usuario->user->organismo_id)->first();
                if ($caso) {
                    $totalCaso = $caso->efectivos + $caso->sinefecto + $caso->noatendida + $caso->repetido + $caso->apoyo;
                    $matriz = array('caso' => $caso, 'usuario' => $usuario, 'totalcaso' => $totalCaso, 'actividad' => $actividad, 'organismo' => $organismo, 'puesto' => $puesto);

                }else{
                    $matriz = arraY('caso' => false, 'usuario' => $usuario, 'actividad' => $actividad, 'organismo' => $organismo, 'puesto' => $puesto);
                }
                    $datos->push($matriz);
            }

        }
              // dd($online);
       // dd($datos[0]['llamada']);

        // foreach($datos as $dat){
        //     dd($dat['llamada']);
        // }
        //dd($datos[1]['organismo']->siglas);
        //dd($usuarios->user);
        //dd($online->user->id);
       
       return view('supervisores.monitoreo', compact('datos','online'));
    }


}
