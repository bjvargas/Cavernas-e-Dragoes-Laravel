@extends('templates.template')

@section('cabecalho')
<h1 class="text-center"> @if (isset($magia))Editar Magias @else Criando Magia @endif </h1>
@endsection
@section('conteudo')

<div class="col-8 m-auto">
    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
        {{$erro}} <br>
        @endforeach
    </div>
    @endif
    @if (isset($magia))
    <form name="formCad" id="formCad" method="post" action="{{url("magias/$magia->id")}}">
        @method('PUT')
        @else
        <form name="formCad" id="formCad" method="post" action="{{url("magias")}}">
            @endif
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome da Magia:" value="{{$magia->nome ?? ''}}"><br>
            <input class="form-control" type="text" name="descricao" id="descricao" placeholder="descricao:" value="{{$magia->descricao ?? ''}}"><br>
            <input class="form-control" type="number" name="level" id="level" placeholder="level:" value="{{$magia->level ?? ''}}"><br>
            <input class="form-control" type="text" name="escola" id="escola" placeholder="Escola da Magia:" value="{{$magia->escola ?? ''}}"><br>
            <input class="form-control" type="text" name="tempodeconjuracao" id="tempodeconjuracao" placeholder="Tempo de Conjuração:" value="{{$magia->tempodeconjuracao ?? ''}}"><br>
            <input class="form-control" type="number" name="alcance" id="alcance" placeholder="Alcance:" value="{{$magia->alcance ?? ''}}"><br>
            <input class="form-control" type="text" name="componentes" id="componentes" placeholder="Componentes:" value="{{$magia->componentes ?? ''}}"><br>

            <div class="form-check">
                @if (isset($magia))
                <input class="form-check-input" type="checkbox" name="verbal" id="verbal" <?php if ($magia->verbal == 1) { ?> checked="true" <?php } ?> />
                @else
                <input class="form-check-input" type="checkbox" name="verbal" id="verbal" />
                @endif
                <label class="form-check-label" for="verbal"> Verbal </label>
            </div>

            <div class="form-check">
                @if (isset($magia))
                <input class="form-check-input" type="checkbox" name="somatico" id="somatico" <?php if ($magia->somatico == 1) { ?> checked="true" <?php } ?> />
                @else
                <input class="form-check-input" type="checkbox" name="somatico" id="somatico" />
                @endif
                <label class="form-check-label" for="somatico"> Somatico </label>
            </div>

            <div class="form-check">
                @if (isset($magia))
                <input class="form-check-input" type="checkbox" name="material" id="material" <?php if ($magia->material == 1) { ?> checked="true" <?php } ?> />
                @else
                <input class="form-check-input" type="checkbox" name="material" id="material" />
                @endif
                <label class="form-check-label" for="material"> Material </label>
            </div><br>
           
            <input class="form-control" type="text" name="duracao" id="duracao" placeholder="Duração" value="{{$magia->duracao ?? ''}}"><br>
            <input class="form-control" type="text" name="classe" id="classe" placeholder="Clases que usam" value="{{$magia->classe ?? ''}}"><br>
            <input class="form-control" type="text" name="levelmaior" id="levelmaior" placeholder="Em niveis maiores:" value="{{$magia->levelmaior ?? ''}}"><br>
            <input type="submit" value="@if (isset($magia))Editar Magia @else Criar Magia @endif" class="btn btn-primary">

       
    </form>
</div>
@endsection