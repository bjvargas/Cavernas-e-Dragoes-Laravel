@extends('templates.template')

@section ('conteudo')

    <h1 class="text-center">{{$magia->nome}}</h1> <hr>
    <div class="col-10 m-auto">
        id: {{$magia->id}} <br>
        Nome: {{$magia->nome}} <br>
        Descrição: {{$magia->descricao}} <br>
        Em niveis maiores: {{$magia->levelmaior}} <br>
        Level: {{$magia->level}} <br>
        Escola: {{$magia->escola}} <br>
        Tempo de Conjuração: {{$magia->tempodeconjuracao}} <br>
        Alcance: {{$magia->alcance}} <br>
        Componentes {{$magia->componentes}} <br>
        {{$magia->verbal}} <br>
        {{$magia->somatico}} <br>
        {{$magia->material}} <br>
        Duração: {{$magia->duracao}} <br>
        Classe que utilizam: {{$magia->classe}} <br>
        
    </div>
    @endsection
