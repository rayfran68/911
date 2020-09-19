@extends('layout.master')

@section('content')
<form action="/PostsDepartamento" method="GET" enctype="multipart/form-data">
    <div class="container">

        <div class="row mt-5">
            <div class="col-md-3">
                <select class="browser-default custom-select" id="departamento" name="departamento">

                    @foreach($departamento as $departamento)

                    <option value="{{$departamento->id}}">{{$departamento->Nombre}}</option>
                    @endforeach


                </select>


            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-default mb-2">Buscar</button>
            </div>

        </div>
    </div>



</form>
<form action="/Post" method="post">

    <div class="container">
        <div class="row ">
            @foreach($Post as $Post)
            <div class="col-3 pt-5 ">

                <!-- Card -->
                <div class="card">

                    <!-- Card image -->
                    <img class="card-img-top" src="{{asset('storage').'/'.$Post->Foto}}" alt="Card image cap">

                    <!-- Card content -->
                    <div class="card-body ">

                        <!-- Title -->
                        <a href="{{url ('/Post/'.$Post->id)}}">
                            <h4 class="card-title">{{$Post->Titular}}</h4>
                        </a>
                        <!-- Text -->
                        <p class="card-text">{{Str::limit($Post->Cuerpo, 100)}}</p>
                        <!-- Button -->


                    </div>

                </div>
                <!-- Card -->

            </div>
            @endforeach

        </div>


        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

</form>




@endsection