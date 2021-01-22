    @extends('Layout.master')



    @section('content')


    <form action="{{route('StoreCarousel')}}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}


    <div class="custom-file">

                    <input type="file" class="custom-file-input" id="file" name="file"
                        aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="file">Seleccione imagen</label>
                </div>



    </form>


    <form action="{{route('StoreCarousel')}}"  method="POST" class="dropzone" id="my-Awesome-Dropzone"  >

    <div class="fallback">


    </div>
    <button type="submit" id="submit-all" class="btn btn-danger">subir</button>

    </form>
    @section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>
    
    
    
    <script>
    Dropzone.options.myAwesomeDropzone = {
        headers: {

            'X-CSRF-TOKEN': "{{csrf_token()}}"
        },

        dictDefaultMessage: "Arrasta una imagen",
        acceptedFiles: "image/*",
        maxFilesize: 2, 
        maxFiles: 4, 
        autoProcessQueue: true,

        init: function(){

    var submitButton= document.querySelector("#submit-all");
    myAwesomeDropzone = this;


    submitButton.addEventListener("click", function(e) {

    e.preventDefault();
    e.stopPropagation();
    myAwesomeDropzone.ProcessQueue();
                                        });





    this.on("addedfile", function(file) {
    alert ("Se agrego archivo vato");


    });

    this.on("complete", function(file){

     myAwesomeDropzone.removeFile(file);
    });









        
    }
};

</script>




@endsection

@endsection