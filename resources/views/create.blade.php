@extends('templates.template')

@section('content')
<h1 class="text-center">Criando Ficha Personagem</h1>
@php
use app\Http\Controllers\Util;
$classeUtil=new Util;
@endphp
<div class="col-3 m-auto">
  <form name="formPersonagem" id="formPersonagem" method="post" action="{{url("personagens")}}">
    @csrf
    <div class="form-group">
      <select class="form-control" name="id_user" id="id_user">
        <option>Selecione Jogador</option>
        @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select>
    </div><br>
    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Personagem:"><br>
    <div class="form-group">
      <select class="form-control" name="classe" id="classe">
        <option value="Guerreiro">Guerreiro</option>
        <option value="Barbaro">Bárbaro</option>
        <option value="Bardo">Bardo</option>
        <option value="Feiticeiro">Feiticeiro</option>
      </select>
    </div><br>
    <div class="form-group">
      <select class="form-control" name="raca" id="raca">
        <option value="Humano">Humano</option>
        <option value="Anão">Anão</option>
        <option value="Elfo">Elfo</option>
      </select>
    </div>
    Força: <input class="form-control" type="number" value="8" name="forca" id="forca">
    Destreza: <input class="form-control" type="number" value="8" name="destreza" id="destreza">
    Constituição: <input class="form-control" type="number" value="8" name="constituicao" id="constituicao">
    Inteligência: <input class="form-control" type="number" value="8" name="inteligencia" id="inteligencia">
    Sabedoria: <input class="form-control" type="number" value="8" name="sabedoria" id="sabedoria">
    Carisma: <input class="form-control" type="number" value="8" name="carisma" id="carisma"><br>

    <input type="submit" value="Criar" class="btn btn-primary">
  </form>


</div>
@endsection