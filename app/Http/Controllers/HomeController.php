<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Departamento;
use App\Carousel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    
    {

        $mostrar = Carousel::all();

        return view('welcome', compact('mostrar'));

    }



    public function index2()
    
    {


        return("MAMAGUEBO");
    }
}
