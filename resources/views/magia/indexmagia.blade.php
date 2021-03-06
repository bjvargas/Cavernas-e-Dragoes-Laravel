@extends('templates.template')

@section ('cabecalho')
<h1 class="text-center">Lista de Magias </h1> <hr>
@endsection

@section('conteudo')

<div class="text-center mt-3 mb-4">
  <a href="{{url("magias/create")}}">
    <button class="btn btn-success"> Cadastrar </button>
  </a>
</div>
@csrf

<div class="col-13 m-auto">
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Level</th>
      <th scope="col">Classe</th>
      <th scope="col">Escola</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($magia as $magias)
    <tr>
      <th scope="row">{{$magias->id}}</th>
      <td>{{$magias->nome}}</td>
      <td>{{$magias->level}}</td>
      <td>{{$magias->classe}}</td>
      <td>{{$magias->escola}}</td>
      <td>
      <a href="{{url("magias/$magias->id")}}">
            <button class="btn btn-dark"> Visualizar </button>
          </a>

          <a href="{{url("magias/$magias->id/edit")}}">
            <button class="btn btn-primary"> Editar </button>
          </a>

          <a href="{{url("magias/$magias->id")}}" class="js-deu">
            <button class="btn btn-danger"> Deletar </button>
            </a>

      </td>
    </tr>
    @endforeach
</tbody>
</table>
{{$magia->links()}}
</div>
@endsection

