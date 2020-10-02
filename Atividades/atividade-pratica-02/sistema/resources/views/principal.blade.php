<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="https://raw.githubusercontent.com/twbs/icons/main/icons/basket3-fill.svg">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- https://fonts.google.com/specimen/Secular+One?sidebar.open=true&selection.family=Secular+One //-->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    <style type="text/css">
        .logo {
            font-family: 'Secular One', sans-serif;
        }
    </style>

    <title>Sistema de Manutenção de Equipamentos</title>
</head>
<body>

    <div class="container-fluid">
        <!-- https://getbootstrap.com/docs/4.5/components/navbar/ //-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand logo" href="{{route('principal')}}">
                <!-- https://icons.getbootstrap.com/icons/basket3-fill/ //-->
                <img src="https://raw.githubusercontent.com/twbs/icons/main/icons/basket3-fill.svg" alt="Logo">
            Bits Manutenção LTDA
            </a>
            <!-- https://getbootstrap.com/docs/4.5/components/navs/ //-->
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{route('principal')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/areageral">Área Geral - Suporte</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Área Administrativa</a></li>
            </ul>
        </nav>

        <!-- https://laravel.com/docs/8.x/responses#redirecting-with-flashed-session-data //-->
        @if(session('msg_success'))
            <div class="alert alert-success">
                {{ session('msg_success') }}
            </div>
        @endif

        @if(session('msg_fail'))
            <div class="alert alert-danger">
                {{ session('msg_fail') }}
            </div>
        @endif

        <!-- https://laravel.com/docs/8.x/blade#defining-a-layout //-->
        <!-- CONTEUDO DA PAGINA //-->
        <div id="conteudo">
            @yield('conteudo')
        </div>
    </div>

</body>
</html>