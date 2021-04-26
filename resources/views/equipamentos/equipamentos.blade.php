@extends('templates.templateequipamento')

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

  @csrf
  <table class="table text-center">
    <thead class="table-dark">
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
 
</div>
@endsection