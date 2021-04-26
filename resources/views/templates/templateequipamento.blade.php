<!doctype html>
<html lang="pt-BR">
<body style="background-image:url('images/backequip.jpg')"style=("background-size:cover");
>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" >
    <title>Cavernas e Dragões</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<nav >
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
     <a class="navbar navbar-expand-lg" href="{{ route('personagens') }}">Personagens</a>
     @auth
     <a href="/sair" class="text-danger">Sair</a>
     @endauth
     @guest
     <a href="/entrar">Entrar</a>
     @endguest
</nav>
    <div class="container">
        <div class="jumbotron"
        style="background:transparent !important" class="jumbotron">
            <h1>@yield('cabecalho')</h1>
        </div>

        @yield('conteudo')
        <script src="{{url("assets/js/javascript.js")}}"></script>
    </div>
</body>

</html>