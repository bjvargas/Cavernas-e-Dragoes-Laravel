@extends('templates.template')

@section('cabecalho')
<h1 class="text-center">EQUIPAMENTOS</h1>
@endsection
@section('conteudo')

<div class="text-center mt-3 mb-4">
  <a href="{{url("equipamentos/create")}}">
    <button class="btn btn-success"> Cadastrar </button>
  </a>
</div>

<div class="col-10 m-auto">

<form action="{{ route('buscarEquipamentos') }}" method="POST">
  @csrf
    <div class="form-group">
      <select class="form-control" name="buscaE" id="buscaE" required>
       <option value="buscaNome" name='buscaNome'>Nome</option>
        <option value="buscaTipo" name='buscaTipo'>tipo</option>
        <option value="buscaPreco" name='buscaPreco'>Preço</option>
      </select>
  <input type="text" name="buscar" placeholder="Pesquisar">
  <button type="submit" class="btn btn-primary"> Filtrar </button>

</form>
  @csrf
  <table class="table table-hover">
    <thead class="">
      <tr>
        <th scope="col">Id </th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Opções</th>
      </tr>
    </thead>
    <tbody>

      @foreach($listaEquipamentos as $equipamento)
       <tr>
        <th scope="row">{{$equipamento->id}}</th>
        <td>{{$equipamento->nome}}</td>
        <td>{{$equipamento->preco}}</td>
       <td>
          <a href="{{url("equipamentos/$equipamento->id")}}">
            <button class="btn btn-dark"> Visualizar </button>
          </a>

          <a href="{{url("equipamentos/$equipamento->id/edit")}}">
            <button class="btn btn-primary"> Editar </button>
          </a>

          <a href="{{url("equipamentos/$equipamento->id")}}" class="js-delEquip">
            <button class="btn btn-danger"> Deletar </button>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @if (isset($filtros))
  {!! $listaEquipamentos->appends($filtros)->links() !!}
  @else
  {!! $listaEquipamentos->links() !!}
  @endif
</div>
@endsection