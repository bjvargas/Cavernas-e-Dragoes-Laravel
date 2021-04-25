@extends('templates.template')

@section ('cabecalho')
<h1 class="text-center">Lista de Magias do Personagem: {{$personagem->nome}} </h1>
<hr>
@endsection

@section('conteudo')

<form name="formListaMagia" id="formListaMagia" method="post" action="{{url("listamagias")}}">
  @csrf
  <div class="form-group">
    <select class="form-control" name="id_magia" id="id_magia" required>
      @foreach($todasMagias as $magic)
      <option value="{{$magic->id}}">{{$magic->nome}}</option>      
      @endforeach
      <input type="hidden" name="id_personagem" id="id_personagem" value="{{$personagem->id}}" />
    </select>
  </div><br>
  <div class="text-center mt-3 mb-4">
    <input type="submit" value="Adicionar Magia" class="btn btn-primary">
</form>

</div>

@csrf

<div class="col-13 m-auto">
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">id Cadastro</th>
        <th scope="col">id Magia</th>
        <th scope="col">Nome</th>
        <th scope="col">Level</th>
        <th scope="col">Classe</th>
        <th scope="col">Escola</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($magias as $magia)
      <tr>
        <th>{{$magia->id}}</th>
        <th>{{$magia->id_cadastro}}</th>
        <td>{{$magia->nome}}</td>
        <td>{{$magia->level}}</td>
        <td>{{$magia->classe}}</td>
        <td>{{$magia->escola}}</td>
        <td>
          <a href="{{url("magias/$magia->id")}}">
            <button class="btn btn-dark"> Visualizar </button>
          </a>

          <a href="{{url("destroyMagiaPersonagem/$magia->id_cadastro")}}" class="js-delMP">
            <button class="btn btn-danger"> Deletar Magia do Char </button>
          </a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection