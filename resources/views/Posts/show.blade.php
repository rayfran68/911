@extends('layout.master')

@section('content')

<div class="container">


</div>

    <div class="row ">
        @foreach($Post as $Post)
        
        <div class="col-3 pt-5 ">

            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <img class="card-img-top " src="{{asset('/storage/images/posts/'. $Post->Foto)}}" alt="Card image cap">

                <!-- Card content -->
                <div class="card-body ">

                    <!-- Title -->
                    <h4 class="card-title"><a>{{$Post->Titular}}</a></h4>
                    <!-- Text -->
                    <p class="card-text">{{Str::limit($Post->Cuerpo, 100)}}</p>
                    <!-- Button -->

                    <div class="container">
                        <div class="row ">
                            <div class="col-md-3 mr-5">

                                <form action="/EditPosts/{{$Post->id}}" method="post">
                                    {{ csrf_field() }}


                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-feather-alt"></i>
                                    </button>



                                </form>

                            </div>


                            <div class="col-md-3">

                                <form  method="POST" action="/BorrarPosts/{{$Post->id}}">

                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar?');">
                                        <i class="fas fa-trash"></i> </button>

                                </form>

                            </div>

                        </div>
                    </div>
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
<br>
<br>
<br>
<br>
<br>

@endsection