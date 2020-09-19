@extends('layout.master')

@section('content')

<div class="container mb-5 ">

    <div class="mt-4 ">

        <h1 class="h1 font-weight-bold  text-default text-center ">

            {{$Post->Titular}}



        </h1>


    </div>
    <div class="row ">

        <div class="col-md-8 mt-5 card ">

            <div class="container row ">
                <p class="text-danger">etiquetas </p>

                <div class="col-md-2">
                    <span class="badge badge-pill badge-default">Default</span>
                </div>

                <div class="col-md-2">
                    <span class="badge badge-pill badge-default">Default</span>
                </div>

                <div class="col-md-2">
                    <span class="badge badge-pill badge-default">Default</span>
                </div>

            </div>




            <div class=" text-center mt-5">

                <img src="{{asset('storage').'/'.$Post->Foto}}" alt="" width="400px">

            </div>

            <div class="col-md-10 ml-5  d-flex justify-content-center my-2 ">


                <p class="ml-2 py-2 ">

                    {{$Post->Cuerpo}}
                </p>
            </div>

        </div>

        <!--Zoom effect-->


        <div class="col-md-3 ml-4">

            <!-- Card -->
            <div class=" mt-5">

                <!-- Card image -->
                <div class="view overlay d-flex justify-content-center">
                    <div class="view overlay zoom">
                        <img src="{{(asset('imgs/policeman-svgrepo-com.svg'))}}" alt=""
                            class="img-fluid z-depth-1 rounded-circle zoom" width="200px">

                    </div>


                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body ">

                    <!-- Title -->
                    <h4 class="card-title text-center ">

                        <p class="h3">{{$Post->user->name}}</p>

                        <p class="h4 text-muted">{{$Post->departamento->Nombre}}</p>
                    </h4>
                    <!-- Text -->


                </div>

            </div>
            <!-- Card -->

        </div>


    </div>

   

        <div class="row mt-5 d-flex justify-content-around">

    

            @if($PostBefore !== null )


            <div class="col-4">
                <!-- Card -->
                <div class="card card-image"
                    style="background-image: url({{asset('storage').'/'.$PostBefore->Foto}});background-size:cover; background-repeat: no-repeat;width: 300px;">

                    <!-- Card image -->
                    <div class="d-flex justify-content-center">


                    </div>
                    </a>
                    <!-- Card content -->
                    <div class="card-body mr-5 ">
                        <a href="{{url ('/Post/'.$PostBefore->id)}}">
                            <p class=" h4 text-white text-center font-weight-bold text-uppercase">
                                {{Str::limit($PostBefore->Titular, 40)}}
                            </p>
                        </a>

                        <!-- Text -->
                        <h2 class="card-text ">
                        </h2>
                        <!-- Button -->

                    </div>

                </div>
                <!-- Card -->



                @endif
            </div>

            @if($PostNext !== null )

            <div class="col-4 ">
                <div class="card "
                    style="background-image: url({{asset('storage').'/'.$PostNext->Foto}});background-size:cover; background-repeat: no-repeat;width: 300px;">

                    <!-- Card image -->
                    <div class="d-flex justify-content-center">

                    </div>
                    </a>

                    <!-- Card content -->
                    <div class="card-body ml-5">

                        <!-- Title -->
                        <a href="{{url ('/Post/'.$PostNext->id)}}" class="">
                            <p class=" h4 text-white text-center font-weight-bold text-uppercase">
                                {{Str::limit($PostNext->Titular, 40)}}
                            </p>
                        </a>
                        <!-- Button -->

                    </div>

                </div>
            </div>


            @endif





        </div>

    </div>


    @endsection