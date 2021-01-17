@extends('layout.master')

@section('content')
<form action="/UpdatePosts/{{$Post->id}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container   ">
        @if(count($errors)>0)
        <ul class="mt-5">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-exclamation-circle"></i>
                {{$error}}

            </div>
            @endforeach

        </ul>
        @endif
        <div class="row d-flex justify-content-center">

            <div class="col-md-12">

                <div class="md-form mb-4 pink-textarea active-pink-textarea">
                    <i class="fas fa-feather prefix"></i>
                    <textarea id="Titular" name="Titular" class="md-textarea form-control" rows="2"> {{$Post->Titular}} </textarea>
                    <label for="form21">TITULAR</label>
                    <input type="hidden" name="_method" value="PUT">

                </div>

            </div>
        </div>
        
        <div class="row d-flex justify-content-center">
        <div class="col-4 text-center">
            <div class="col-12"> <img class="card-img-top rounded-pill " src="{{asset('/storage/images/posts/'. $Post->Foto)}}" alt="Card image cap"> </div>
            
        </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Subir imagen</span>
                </div>
                <div class="custom-file">

                    <input type="file" class="custom-file-input" id="Foto" name="Foto" value="" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="Foto">{{$Post->Foto}}</label>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="md-form mb-4 pink-textarea active-pink-textarea">

                    <i class="far fa-clipboard prefix"></i>
                    <textarea id="Cuerpo" name="Cuerpo" value="{{$Post->Cuerpo}}" class="md-textarea form-control" rows="15"> {{$Post->Cuerpo}}</textarea>
                    <label for="form21">Cuerpo</label>

                </div>

            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center">

        <button class=" btn btn-default"><i class="fas fa-marker"></i></button>
    </div>


</form>







@endsection