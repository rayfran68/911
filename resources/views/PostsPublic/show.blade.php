@extends('Layout.master')

@section('content')
<form action="/PostsDepartamento" method="GET" enctype="multipart/form-data">
    <div class="container">
        <h1 class="text-center">Categorias</h1>
        <div class="row mt-5">
            <div class="col-md-3">
                <select class="browser-default custom-select" id="category_id" name="category_id">

                    @foreach($departamento as $departamento)

                    <option value="{{$departamento->id}}">{{$departamento->name}}</option>
                    @endforeach


                </select>


            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-default mb-2">Buscar</button>
            </div>

        </div>
    </div>




</form>

ML
<!--Grid row-->
<div class="row">

  <!--Grid column-->
  <div class="col-md-6 mb-4">

    <!-- Card -->
    <div class="card gradient-card">

        <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">

          <!-- Content -->
          <a href="#!">
            <div class="text-white d-flex h-100 mask blue-gradient-rgba">
              <div class="first-content align-self-center p-3">
                <h3 class="card-title">Today's sales</h3>
                <p class="lead mb-0">Click on this card to see details</p>
              </div>
              <div class="second-content align-self-center mx-auto text-center">
                <i class="far fa-money-bill-alt fa-3x"></i>
              </div>
            </div>
          </a>

        </div>

        <!-- Data -->
        <div class="third-content ml-auto mr-4 mb-2">
          <p class="text-uppercase text-muted">Today's sale</p>
          <h4 class="font-weight-bold float-right">2000$</h4>
        </div>

        <!-- Content -->
        <div class="card-body white">
          <div class="progress md-progress">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="text-muted">Better than last week (25%)</p>
          <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
          <p class="text-muted" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vel dolores qui, necessitatibus aut eaque magni mollitia tenetur molestiae sit quae quos quaerat amet exercitationem atque animi odio.</p>
        </div>

    </div>
    <!-- Card -->

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-md-6 mb-4">

    <!-- Card -->
    <div class="card gradient-card">

        <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

          <!-- Content -->
          <a href="#!">
            <div class="text-white d-flex h-100 mask purple-gradient-rgba">
              <div class="first-content align-self-center p-3">
                <h3 class="card-title">Subscriptions</h3>
                <p class="lead mb-0">Click on this card to see details</p>
              </div>
              <div class="second-content  align-self-center mx-auto text-center">
                <i class="fas fa-chart-line fa-3x"></i>
              </div>
            </div>
          </a>

        </div>

        <!-- Data -->
        <div class="third-content  ml-auto mr-4 mb-2">
          <p class="text-uppercase text-muted">Subscriptions</p>
          <h4 class="font-weight-bold float-right">200</h4>
        </div>

        <!-- Content -->
        <div class="card-body white">
          <div class="progress md-progress">
            <div class="progress-bar purple lighten-2" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="text-muted">Worse than last week (25%)</p>
          <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
          <p class="text-muted" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vel dolores qui, necessitatibus aut eaque magni mollitia tenetur molestiae sit quae quos quaerat amet exercitationem atque animi odio.</p>
        </div>

    </div>
    <!-- Card -->

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-md-6 mb-4">

    <!-- Card -->
    <div class="card gradient-card">

        <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

          <!-- Content -->
          <a href="#!">
            <div class="text-white d-flex h-100 mask peach-gradient-rgba">
              <div class="first-content align-self-center p-3">
                <h3 class="card-title">Traffic</h3>
                <p class="lead mb-0">Click on this card to see details</p>
              </div>
              <div class="second-content  align-self-center mx-auto text-center">
                <i class="fas fa-chart-pie fa-3x"></i>
              </div>
            </div>
          </a>

        </div>

        <!-- Data -->
        <div class="third-content  ml-auto mr-4 mb-2">
          <p class="text-uppercase text-muted">Traffic</p>
          <h4 class="font-weight-bold float-right">20000</h4>
        </div>

        <!-- Content -->
        <div class="card-body white animated">
          <div class="progress md-progress">
            <div class="progress-bar amber darken-3" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="text-muted">Worse than last week (75%)</p>
          <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
          <p class="text-muted" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vel dolores qui, necessitatibus aut eaque magni mollitia tenetur molestiae sit quae quos quaerat amet exercitationem atque animi odio.</p>
        </div>

    </div>
    <!-- Card -->

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-md-6 mb-4">

    <!-- Card -->
    <div class="card gradient-card">

        <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

          <!-- Content -->
          <a href="#!">
            <div class="text-white d-flex h-100 mask aqua-gradient-rgba">
              <div class="first-content align-self-center p-3">
                <h3 class="card-title">Organic traffic</h3>
                <p class="lead mb-0">Click on this card to see details</p>
              </div>
              <div class="second-content  align-self-center mx-auto text-center">
                <i class="fas fa-chart-line fa-3x"></i>
              </div>
            </div>
          </a>

        </div>

        <!-- Data -->
        <div class="third-content  ml-auto mr-4 mb-2">
          <p class="text-uppercase text-muted">Organic traffic</p>
          <h4 class="font-weight-bold float-right">2000</h4>
        </div>

        <!-- Content -->
        <div class="card-body white">
          <div class="progress md-progress">
            <div class="progress-bar cyan lighten-1" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="text-muted">Better than last week (50%)</p>
          <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
          <p class="text-muted" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vel dolores qui, necessitatibus aut eaque magni mollitia tenetur molestiae sit quae quos quaerat amet exercitationem atque animi odio.</p>
        </div>

    </div>
    <!-- Card -->

  </div>
  <!--Grid column-->

</div>
<!--Grid row--
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
                            <h4 class="card-title">{{$Post->name}}</h4>
                        </a>        
        <p class="card-text">
        {{Str::limit($Post->body, 100)}}
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



@if(empty($Post->name))

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
<br>
<br>
<br>
<br>
<br>
<br>
@else

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

@endif


@endsection