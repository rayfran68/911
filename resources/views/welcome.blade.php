@extends('Layout/master')

@section('content')
<style>
    .carousel-items .item {
        height: 1000px;
    }

    .item img {
        position: absolute;
        object-fit: cover;
        top: 0;
        left: 0;
        min-height: 500px;
    }

    .main-text {
        position: absolute;
        top: 300px;
        width: 96.66666666666666%;
        color: #FFF;
    }
</style>








<!--Carousel Wrapper-->
<div id="carouselExampleFade" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner ">


        @foreach($mostrar as $mostrar)
@if ($loop->first)

<div class="carousel-item  active">

<img src="{{$mostrar->Foto}}" style="height: 800px" class="w-100">

            </div>
@endif
        <div class="carousel-item  ">
            <img src="{{$mostrar->Foto}}" style="height: 800px" class="w-100">
            </div>
        @endforeach

    </div>
</div>
<div class="main-text">
    <div class="col-md-12 ">
        <div class=" d-flex justify-content-center">

            <img class=" animated rotateInUpRight slow  d-flex justify-content-end" src="{{('imgs/911.png')}}" style="height: 200px" alt="">
            <div class=" ">
                <div class="container flex-center text-center mt-5">
                    <div class="row mt-5">
                        <div class="col-md-12 wow fadeIn mb-3 ">
                            <h1 class="display-3 mb-3 wow fadeInDown text-default " data-wow-delay="0.3s">¿Quienes somos?
                            </h1>
                            <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn text-dark" data-wow-delay="0.4s">Centro de
                                comando, control y telecomunicacones VEN 911</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">

    </div>
</div>
</div>
</div>
<!--/.Carousel Wrapper-->
<main>


    <div class="view jarallax d-flex justify-content-center " style="height: 100vh;">
        <img class="jarallax-img animated rotateInUpRight slow mt-2" src="{{('imgs/911.png')}}" height="40%" alt="">
        <div class="mask rgba-blue-slight ">
            <div class="container flex-center text-center mt-5">
                <div class="row mt-5">
                    <div class="col-md-12 wow fadeIn mb-3 ">
                        <h1 class="display-3 mb-3 wow fadeInDown text-default " data-wow-delay="0.3s">¿Quienes somos?
                        </h1>
                        <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn" data-wow-delay="0.4s">Centro de
                            comando, control y telecomunicacones VEN 911</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>




</main>
<div class="container ">
    <h2 class="h1 font-weight-bold light-blue-text text-center  text-default mt-3">Cuadrante de paz</h2>

    <!--Grid row-->
    <div class="row ">

        <!--Grid column-->
        <div class="col-md-7  d-flex align-items-center">


            <p align="justify">Son áreas que abarca entre 2 y 5 kilómetros cuadradados, demarcadas en sectores del
                territorio venezolano donde la delincuencia se manifiesta con más frecuencia.
                Un cuadrante de paz no es una parroquia o un muniicpio. De hecho, dentro de una misma parroquia
                puede haber dos o máscuadrantes. Imagina que se trata de pequeños amapas dentro del mapa nacional o
                estadal, Todo depende de la ocurrencia delictivida que se registre en la localidad. </p>

        </div>
        <!--Grid column-->
        <div class="col-4 d-flex align-items-center">

            <img class="img-fluid " src="{{('imgs/Regiones_Venezolanas.svg')}}" alt="">

        </div>
    </div>
    <!--Grid row-->

</div>


<div class="container ">
    <h2 class="h1 font-weight-bold  text-default text-center mt-2">¿Cuantos Cuadrantes de paz existen en el pais?</h2>

    <!--Grid row-->
    <div class="row d-flex justify-content-center mt-4">

        <div class="card text-white bg-danger mb-3 col-3" style="max-width: 20rem;">
            <div class="card-header text-center text-bold">
                <h2>2094</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">CUADRANTES</h5>
                <div class="text-center mb-2"> <i class="fas fa-motorcycle fa-3x"></i> </div>

                <p class="card-text text-white text-center "> TERRESTRES</p>
            </div>

        </div>
        <!--Grid row-->
        <div class="card text-white blue mb-3 col-3" style="max-width: 20rem;">
            <div class="card-header text-center text-bold">
                <h2>17</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">CUADRANTES</h5>
                <div class="text-center mb-2"> <i class="fas fa-anchor fa-3x "></i> </div>

                <p class="card-text text-white text-center "> MARÍTIMOS</p>
            </div>

        </div>
        <div class="card text-white green mb-3 col-3" style="max-width: 20rem;">
            <div class="card-header text-center text-bold">
                <h2>8</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">CUADRANTES</h5>
                <div class="text-center mb-2"> <i class="fas fa-water fa-3x"></i></div>

                <p class="card-text text-white text-center "> LACUSTRES</p>
            </div>

        </div>
    </div>

    <div class="container-inline mt-4"">
        <h2 class=" h1 font-weight-bold text-default text-center mt-4">¿Cómo funcionan los cuadrantes de paz?
        </h2>

        <div class="row d-flex justify-content-end mt-4"">

            <div class=" card text-white green mb-3 col-3" style="max-width: 20rem;">
            <div class="card-header text-center text-bold">
                <h2>1</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">VEHICULO</h5>
                <div class="text-center mb-2"> <i class="fas fa-car fa-3x"></i></div>
            </div>

        </div>
    </div>

</div>

<div class="row d-flex justify-content-between">

    <div class="card text-white warning-color-dark mb-3 col-3" style="max-width: 20rem;">

        <div class="card-header text-center text-bold">
            <h2>UPI</h2>
        </div>
        <div class="card-body">
            <h4>Unidad de Patrullaje Inteligente</h4>

        </div>

    </div>

    <div class="col-2 d-flex align-items-center">
        <i class="fas fa-arrow-right fa-5x"></i>
    </div>

    <div class="card text-white purple mb-3 col-3" style="max-width: 20rem;">
        <div class="card-header text-center text-bold">
            <h2>2</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">MOTOS</h5>
            <div class="text-center mb-2"> <i class="fas fa-motorcycle fa-3x"></i></div>

        </div>

    </div>
</div>


<div class="row d-flex justify-content-end">

    <div class="card text-white blue mb-3 col-3" style="max-width: 20rem;">
        <div class="card-header text-center text-bold">
            <h2>8</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">FUNCIONARIOS</h5>
            <div class="text-center mb-2"> <i class="fas fa-male fa-3x"></i></div>
        </div>

    </div>
</div>



</div>

</div>


<div class="container">
    <p class="h1 font-weight-bold  text-default text-center ">Como operamos</p>
</div>
<!--Operatividad -->
<div class="container " id="animacion">

    <div class="row mb-5 d-flex justify-content-between d-flex align-items-end ">


        <div class="col-md-3 d-flex justify-content-center ">

            <i class="fas fa-hospital-alt fa-10x"></i>

        </div>

        <div class=" col-md-2 ">


            <div class="row d-flex justify-content-center  ">

                <i class="fas fa-angle-double-right fa-5x"></i>


                <h5 class="text-center"> Registrar incidente </h5>


            </div>


        </div>

        <div class="col-md-2 d-flex align-items-end pa">

            <div class="row">
                <a href="#" data-toggle="tooltip" title="operadora"><img src="{{(asset('imgs/operador.svg'))}}" alt="" width="100px"></a>
                <div class="row">

                    <i class="far fa-clock fa-2x"></i>

                    <h4> 30s </h4>


                </div>
            </div>

        </div>

        <div class=" col-md-2 ">

            <div class="row d-flex justify-content-center  ">



            </div>

            <div class="row d-flex justify-content-center  d-flex align-items-end">

                <i class="fas fa-angle-double-right fa-5x"></i>



                <h5 class="text-center"> Lista de recepcion </h5>


            </div>

        </div>

        <div class="col-md-2 d-flex justify-content-center">


            <div class="row">

                <a href="" data-toggle="tooltip" title="Despachador"><img src="{{(asset('imgs/operadorM.svg'))}}" alt="" width="100px"></a>

                <div class="row">

                    <i class="far fa-clock fa-2x"></i>

                    <h4> 90s </h4>


                </div>


            </div>

        </div>

    </div>


    <div class="row d-flex justify-content-between d-flex align-items-center  ">

        <div class="col-2  ml-5">


            <div class="row d-flex justify-content-center ">

                <i class="fas fa-angle-double-up fa-5x "></i>

            </div>

            <div class="row  d-flex justify-content-center">


                <h4 class="text-center">Alerta</h4>

            </div>

        </div>


        <div class="col-2  ml-5">


            <div class="row d-flex justify-content-center ">

                <i class="fas fa-angle-double-down fa-5x"></i>

            </div>

        </div>


    </div>

    <div class="row d-flex justify-content-between d-flex align-items-center">

        <div class="col-md-3 animated  alarma ml-5 " id="emergencia">

            <i class="fas fa-exclamation-circle fa-10x red-text "></i>

        </div>

        <div class="col-md-6  ">

            <div class="row d-flex justify-content-center">

                <img src="{{(asset('imgs/firefighter-svgrepo-com.svg'))}}" alt="" width="100px">

                <img src="{{(asset('imgs/firetruck-svgrepo-com.svg'))}}" alt="" width="100px">
                <div class="row">
                    <img src="{{(asset('imgs/policeman-svgrepo-com.svg'))}}" alt="" width="100px">

                    <img src="{{(asset('imgs/police-car-with-lights-svgrepo-com.svg'))}}" alt="" width="100px">


                </div>
                <div class="row ml-1">

                    <i class="far fa-clock fa-2x"></i>

                    <h4> 5 - 8 min </h4>


                </div>
            </div>


            <div class="row d-flex justify-content-center mr-3">
                <img src="{{(asset('imgs/surgeon-doctor-svgrepo-com.svg'))}}" alt="" width="100px">

                <img src="{{(asset('imgs/ambulance-svgrepo-com%20(1).svg'))}}" alt="" width="100px">

            </div>


        </div>

        <div class="col-md-2">
            <div class="row  d-flex justify-content-center mb-3">


                <h4 class="text-center">Asignacion de recursos</h4>

            </div>

            <div class="">

                <i class="fas fa-angle-double-left fa-5x "></i>


            </div>

        </div>

    </div>



    <div class="row  ml-5 mt-4">

        <div class="row col-md-12 d-flex justify-content-center ml-4">
            <h4 class="text-center">Acudir al sitio incidente</h4>


        </div>

        <div class=" row col-md-12 d-flex justify-content-center ml-3">


            <i class="fas fa-angle-double-down fa-5x"></i>


        </div>


    </div>


    <div class="row col-md-12 d-flex justify-content-center mt-3 ml-5 animated " id="lugar">



        <i class="fas fa-map-marker-alt red-text fa-10x"></i>




    </div>



</div>
</div>

<!--Operatividad -->
@endsection