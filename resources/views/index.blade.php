@extends('templates.template')

@section('cabecalho')
<h1 class="text-center">{{$usuario->name}}</h1>
@endsection
@section('conteudo')

<div class="text-center mt-3 mb-4">
  <a href="{{url("personagens/create")}}">
    <button class="btn btn-success"> Cadastrar </button>
  </a>
</div>

<form action="{{ route('buscarPersonagens') }}" method="POST">
  @csrf
  <input type="text" name="buscar" placeholder="Pesquisar">
  <button type="submit" class="btn btn-primary"> Filtrar </button>

</form>

<div class="col-10 m-auto">

  @csrf
  <table class="table text-center">
    <thead class="table-dark">
      <tr>
        <th scope="col">Id Personagem</th>
        <th scope="col">Nome</th>
        <th scope="col">Classe</th>
        <th scope="col">Opções</th>
      </tr>
    </thead>
    <tbody>

      @foreach($listaPersonagens as $personagem)
      @php
      $classe=$personagem->find($personagem->id)->relClasses;
      @endphp
      <tr>
        <th scope="row">{{$personagem->id}}</th>
        <td>{{$personagem->nome}}</td>
        <td>{{$classe->nome}}</td>
        <td>
          <a href="{{url("personagens/$personagem->id")}}">
            <button class="btn btn-dark"> Visualizar </button>
          </a>

          <a href="{{url("personagens/$personagem->id/edit")}}">
            <button class="btn btn-primary"> Editar </button>
          </a>

          <a href="{{url("personagens/$personagem->id")}}" class="js-del">
            <button class="btn btn-danger"> Deletar </button>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @if (isset($filtros))
  {!! $listaPersonagens->appends($filtros)->links() !!}
  @else
  {!! $listaPersonagens->links() !!}
  @endif
</div>
@endsection