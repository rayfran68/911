<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organismo;
use App\Models\Municipio;
use App\Models\Cuadrante;
use App\Departamento;
use App\Http\Requests\Muncipio;

class Todo extends Controller
{
    public function find(Request $request){

        $organismos = Organismo::all();
        $cuadrantes = Cuadrante::all();
        $municipio = Municipio::all();

        
   //     $this->validate($request, ['id'=>'requiered']);
//foreach ($municipio as $municipio){
  //echo $municipio->sectores . "<br/>";
    //    echo $municipio->telefono . "<br/>";
      //  echo $municipio->cuadrante . "<br/>";
         
      //}
      $departamento = Departamento::all();

        
       return view('Cuadrantes',compact('municipio', 'organismos',  'cuadrantes', 'departamento'));



    }


    public function show(Request $request){
     

      $departamento = Departamento::all();

      $jua = $request->input('id');

      $cuadrantes = Municipio::find($jua)->cuadrantes;
      
      $nombremunicipio = Municipio::find($jua);
      $municipio = Municipio::all();
      $organismo=Organismo::all();


      //return Request::all();

   return view('CuadrantesImprimir',compact('municipio', 'cuadrantes', 'nombremunicipio', 'organismo', 'departamento'));



  }

}
