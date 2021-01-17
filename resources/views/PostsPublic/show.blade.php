@extends('layout.master')

@section('content')
<form action="/PostsDepartamento" method="GET" enctype="multipart/form-data">
    <div class="container">
        <h1 class="text-center">Categorias</h1>
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
            <div class="col-5 pt-5 ">

                <!-- Card -->
                <div class="card mb-3" style="max-width: 440px; max-height: 440px ">
  <div class="row g-0">
    <div class="col-md-4 d-flex align-items-stretch">
      <img
      src="{{asset('/storage/images/posts/'. $Post->Foto)}}"
        alt="..."
        class="img-fluid " 
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a href="{{url ('/Post/'. $Post->id)}}">
                            <h4 class="card-title">{{$Post->Titular}}</h4>
                        </a>        
        <p class="card-text">
        {{Str::limit($Post->Cuerpo, 100)}}
        </p>
        <p class="card-text">
          <small class="text-muted">{{$Post->created_at}}</small>
        </p>
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
    </div>

</form>




<br>
<br>
<br>
<br>



@endsection