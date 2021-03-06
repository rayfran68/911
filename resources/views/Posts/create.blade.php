@extends('Layout.master')

@section('content')
<form action="/PostStore" method="POST" enctype="multipart/form-data">
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
                    <textarea id="name" name="name" class="md-textarea form-control" rows="2"></textarea>
                    <label for="form21">TITULAR</label>

                </div>

            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <h1>Subida de imagen</h1>
        </div>
        

        <div class="row">

            <div class="col-md-12">

                <div class="md-form mb-4 pink-textarea active-pink-textarea">
                    <i class="far fa-clipboard prefix"></i>

                    <textarea id="body" name="body" class="md-textarea form-control" rows="15"></textarea>
                    <label for="form21">Cuerpo</label>

                </div>

            </div>
        </div>
        <div class="row">

            <select class="browser-default custom-select md-form" name="category_id" id="category_id">
                @foreach($departamento as $departamento)
                <option  value="{{$departamento->id}}">
                    {{$departamento->name}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="d-flex justify-content-center">

        <button class=" btn btn-default"><i class="fas fa-marker"></i></button>
    </div>


</form>

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>


 @endsection





@endsection