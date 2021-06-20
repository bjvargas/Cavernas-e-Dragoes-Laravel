<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <title>Bem vindo aventureiro!</title>

  <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('/css/footer.css') }}" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>

  <header class="cabecalho">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Olá {{$usuario->name}}</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('personagens') }}">Personagens</a>
                <a class="dropdown-item" href="{{ route('magias') }}">Magias</a>
                <a class="dropdown-item" href="{{ route('equipamentos') }}">Equipamentos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/sair">Sair</a>
              </div>
            </li>
            @endauth
            <li class="nav-item"><a class="nav-link active" href="#">Classes<span class="visually-hidden">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Raças</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Antecedentes</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Magias</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Equipamentos</a></li>          
            @guest
            <li class="nav-item"><a class="nav-link" href="entrar">Login</a></li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="conteudo">
    <div class="containerPrincipal">
      <div class="fadeIn1">
        <p>Precisando de um lugar para criar e armazenar seus personagens em D&D 5e?</p>
      </div>

      <div class="fadeIn2">
        <p>Crie seus personagens consultando informações como raças, classes, magias, talentos e antecedentes.
          Poderá evoluir, adicionar equipamentos, magias e muito mais.</p>
      </div>

      <div class="fadeIn3">
        <br>
        <p>Seja muito bem vindo aventureiro!</p>
      </div>

      <div class="fadeIn4">
        <img src="/imagens/logolowqualityblack.webp">
      </div>

    </div>
  </section>

  <footer class="rodape">
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex justify-content-end social_icon">
          <p class="textos-footer">Nos siga nas redes sociais</p>
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
        <div class="textofinal-footer">Todos os direitos reservados Copyright &COPY; 2021</div>
      </div>
    </div>
  </footer>

  <script src="{{url("assets/js/jquery.min.js")}}"></script>
  <script src="{{url("assets/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{url("assets/js/prism.js")}}"></script>
  <script src="{{url("assets/js/custom.js")}}"></script>

</body>

</html>