@extends('layout.master')



@section('content')


<form action="{{route('StoreCarousel')}}" method="post" enctype="multipart/form-data">

{{ csrf_field() }}


<div class="custom-file">

                    <input type="file" class="custom-file-input" id="file" name="file"
                        aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="file">Seleccione imagen</label>
                </div>


                <button type="submit">mandar</button>

</form>


<form action="{{route('StoreCarousel')}}"  method="POST" class="dropzone" id="my-Awesome-Dropzone"  >

    <div class="fallback">


    </div>

</form>
@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>
<script>
    Dropzone.options.myAwesomeDropzone = {
        headers: {

            'X-CSRF-TOKEN': "{{csrf_token()}}"
        },

        dictDefaultMessage: "Arrasta una imagen nojoda"
    };
</script>

@endsection

@endsection