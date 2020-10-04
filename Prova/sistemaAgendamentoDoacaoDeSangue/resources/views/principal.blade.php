<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="https://raw.githubusercontent.com/twbs/icons/main/icons/basket3-fill.svg">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,600&display=swap" rel="stylesheet">


    <style type="text/css">
        .logo {
            font-family: 'Lora', serif;
        }
    </style>

    <title>Sistema de Manutenção de Equipamentos</title>
</head>
<body>

    <div class="container-fluid">
        <!-- https://getbootstrap.com/docs/4.5/components/navbar/ //-->
        <nav class="navbar navbar-expand navbar-light bg-danger">
            <a class="navbar-brand logo" href="{{route('principal')}}">
                <!-- https://icons.getbootstrap.com/icons/heart-half/ //-->
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 1.314C3.562-3.248-7.534 4.735 8 15V1.314z"/>
                    <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
            Blood Life
            </a>
            <!-- https://getbootstrap.com/docs/4.5/components/navs/ //-->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('principal')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('areageral.index')}}">Área Geral</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('areaadministrativa.index')}}">Área Administrativa</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>

        <!-- https://laravel.com/docs/8.x/responses#redirecting-with-flashed-session-data //-->
        @if(session('msg_success'))
            <div class="alert alert-success my-1">
                {{ session('msg_success') }}
            </div>
        @endif

        @if(session('msg_fail'))
            <div class="alert alert-danger my-1">
                {{ session('msg_fail') }}
            </div>
        @endif

        <!-- https://laravel.com/docs/8.x/blade#defining-a-layout //-->
        <!-- CONTEUDO DA PAGINA //-->
        <div id="conteudo" class="my-2">
            @section('conteudo')
            <div class="row justify-content-center py-5">
                <svg width="20em" height="20em" viewBox="0 0 16 16" class="bi bi-heart-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 1.314C3.562-3.248-7.534 4.735 8 15V1.314z"/>
                    <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
            </div>
            <div class="row justify-content-center">
                <h1 class="logo">Blood Life</h1>
            </div>
            <div class="row justify-content-center">
                <h1>&#127973; &#128137;</h1>
            </div>
            @show
        </div>
    </div>

</body>
</html>