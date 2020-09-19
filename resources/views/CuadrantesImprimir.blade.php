@extends('layout.master')

@section('content')


<div class="container row mt-2 ml-5 pb-5 ">

    <div class="col-md-12 d-flex justify-content-center ">



        <form action="/Cuadrantes/{id}">
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="h3 d-flex justify-content-center">Municipios</label>
                <select class="form-control" id="id" name="id">



                    <option selected value="{{$nombremunicipio->id}}"> {{$nombremunicipio->municipio}} </option>







                    @foreach($municipio as $municipio)


                    <option value="{{$municipio->id}}">{{$municipio->municipio}}</option>

                    @endforeach


                </select>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary ">enviar</button>

                </div>



            </div>
        </form>



    </div>

    <div class="col-12">

        <table class="table">
            <thead class="black white-text">
                <tr>
                    <th scope="col">Cuadrante</th>
                    <th scope="col">telefono</th>
                    <th scope="col">organismo</th>
                    <th scope="col">sector</th>


                </tr>
            </thead>
            <tbody>
                @foreach($cuadrantes as $cuadrante)


                <tr>

                    <td> {{ $cuadrante->cuadrante }} </td>
                    <td>{{ $cuadrante->telefono }}</td>
                    <td>{{ $cuadrante->organismo->siglas }}</td>
                    <td> {{ $cuadrante->sectores }} </td>



                </tr>


                @endforeach

            </tbody>




        </table>
    </div>

</div>



@if($cuadrantes->count() <= 1 ) <br>
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
    <br>

    @else($cuadrantes->count() <= 3) <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        @endif

        @endsection