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

      




      <div class=" text-center mt-5">

        <img class="card-img-top" src="{{('storage/images/posts/$Post->Foto')}}"  alt="Card image cap">

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
            <img src="{{(asset('imgs/policeman-svgrepo-com.svg'))}}" alt="" class="img-fluid z-depth-1 rounded-circle zoom" width="200px">

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



  <div class="container mt-5 pb-2">

    <h2 class="text-center">Relacionados</h2>

  </div>


  <div class="container mt-2">


    <div class="row">


      <div class="col-12  rgba-white-strong
">



        <div class="card-group">
          <div class="container ">

            <div class="row">

              <div class="row col-12 ">
                @foreach ($Posts as $posts)

                <div class="col-2 d-flex align-items-center ">




                  <div class="view overlay zoom">
                    <div class=" img-fluid rounded-circle"><img src="{{asset('storage').'/images/posts/'.$posts->Foto}}" alt="zoom" style="width: 100px; height : 150px">

                      <div class="mask flex-center waves-effect waves-light">
                        <p class="white-text">Saber mas</p>
                      </div>

                    </div>





                  </div>

                </div>

                <div class=" col-4">
                  <div class="card mt-2">
                    <div class="card-body">

                      <a href="{{url ('/Post/'.$posts->id)}}">
                        <h4 class="card-title">{{Str::limit($posts->Titular, 40)}}</h4>
                      </a>

                      <p class="card-text">{{Str::limit($posts->Cuerpo, 40)}}</p>
                      <p class="card-text"><small class="text-muted text-center">{{$posts->created_at}}</small></p>
                    </div>
                  </div>


                </div>


                @endforeach

              </div>


            </div>



          </div>


        </div>


      </div>


    </div>


</div>
</div>
</div>
@endsection