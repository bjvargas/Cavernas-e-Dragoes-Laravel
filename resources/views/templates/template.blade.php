<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" >
    <title>Cavernas e Dragões</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<header class="cabecalho">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    @auth
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('indexInicial') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link active" href="{{ route('personagens') }}">Personagens<span class="visually-hidden">(current)</span></a></li>
            
            <li class="nav-item"><a class="nav-link" href="{{ route('magias') }}">Magias</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('equipamentos') }}">Equipamentos</a></li>
            <li class="nav-item"><a class="nav-link" href="/sair">Sair</a></li>
            @endauth
                      
          </ul>
        </div>
      </div>
    </nav>

  </header>

    <div class="container">
        <div class="jumbotron">
            <h1>@yield('cabecalho')</h1>
        </div>

        @yield('conteudo')
        <script src="{{url("assets/js/javascript.js")}}"></script>
    </div>
</body>
</html>