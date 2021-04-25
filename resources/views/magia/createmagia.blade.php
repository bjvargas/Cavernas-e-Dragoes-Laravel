@extends('templates.template')

@section('content')
<h1 class="text-center"> Cadastrar Magia </h1>
<div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{url("magias")}}">
        @csrf
        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome da Magia:"><br>
        <input class="form-control" type="text" name="descricao" id="descricao" placeholder="descricao:"><br>
        <input class="form-control" type="number" name="level" id="level" placeholder="level:"><br>
        <input class="form-control" type="text" name="escola" id="escola" placeholder="Escola da Magia:"><br>
        <input class="form-control" type="text" name="tempodeconjuracao" id="tempodeconjuracao" placeholder="Tempo de Conjuração:"><br>
        <input class="form-control" type="number" name="alcance" id="alcance" placeholder="Alcance:"><br>
        <input class="form-control" type="text" name="componentes" id="componentes" placeholder="Componentes:"><br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" checked="true" name="verbal" id="verbal" />
            <label class="form-check-label" for="verbal"> Verbal </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" checked="true" name="somatico" id="somatico" />
            <label class="form-check-label" for="somatico"> Somatico </label>
        </div>       
        <div class="form-check">
        <input class="form-check-input" type="checkbox" checked="true" name="material" id="material" />
        <label class="form-check-label" for="material"> Material </label>
        </div><br>

        <input class="form-control" type="text" name="duracao" id="duracao" placeholder="Duração"><br>
        <input class="form-control" type="text" name="classe" id="classe" placeholder="Clases que usam"><br>
        <input class="form-control" type="text" name="levelmaior" id="levelmaior" placeholder="Em niveis maiores:"><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar">


    </form>

</div>
@endsection