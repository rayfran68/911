<header>
    <nav class="navbar navbar-expand-lg navbar navbar-dark rgba-teal-strong


">
        <a class="navbar-brand" href="{{url('/home')}}">911</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavAltMarkup">
            <div class="navbar-nav ">                    
                    <a class="nav-item nav-link" href="{{url('/Cuadrantes')}}">Cuadrantes Falcon</a>

                    <a class="nav-item nav-link" href="{{url('/Posts')}}">Publicaciones</a>

                    
                    <ul class="navbar-nav ml-auto">



                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif


                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <a class="dropdown-item" href=" {{ route('PostCreate') }}">Crear Publicacion</a>

                                <a class="dropdown-item" href="{{ route('verPosts') }}">Administrar publicaciones</a>

                                <a class="dropdown-item" href="{{ route('LlenarCarousel') }}">Agregar Elementos al carousel</a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>


            </div>
        </div>
    </nav>

</header>