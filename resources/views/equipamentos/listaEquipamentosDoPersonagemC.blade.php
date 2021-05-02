@extends('templates.template')

@section ('cabecalho')
<h1 class="text-center">Lista de Equipamentos do Personagem: {{$personagem->nome}} </h1>
<hr>
@endsection

@section('conteudo')

<form name="formListaEquipamento" id="formListaEquipamento" method="post" action="{{url("listaequipamentosConsumivel")}}">
  @csrf
  <div class="form-group">
<form name="formListaEquipamento2" id="formListaEquipamento2" method="post" action="{{url("listaequipamentosConsumivel")}}">
  @csrf
    <Label>Equipamentos Consumiveis:</LAbel>
    <select class="form-control" name="id_equipamento" id="id_equipamento" required>
      @foreach($todosEquipamentosConsumivel as $equipC)
      <option value="{{$equipC->id}}">{{$equipC->nome}}</option>      
      @endforeach
      <input type="hidden" name="id_personagem" id="id_personagem" value="{{$personagem->id}}" />
    </select><br>
    <input type="submit" value="Adicionar" class="btn btn-primary">
</form> 
<br>

</div>

@csrf

<div class="col-13 m-auto">
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">id Cadastro</th>
        <th scope="col">id Equipamnto</th>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Propriedades</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($equipamentos as $equipamento)
      <tr>
        <th>{{$equipamento->id}}</th>
        <th>{{$equipamento->id_cadastro}}</th>
        <td>{{$equipamento->nome}}</td>
        <td>{{$equipamento->tipo}}</td>
        <td>{{$equipamento->propriedade}}</td>
        <td>
          <a href="{{url("equipamentos/$equipamento->id")}}">
            <button class="btn btn-dark"> Visualizar </button>
          </a>

          <a href="{{url("destroyEquipamentoPersonagem/$equipamento->id_cadastro")}}" class="js-delEQUIP">
            <button class="btn btn-danger"> Deletar Equipamento </button>
          </a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection