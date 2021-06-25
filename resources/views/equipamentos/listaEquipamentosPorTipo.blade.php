@extends('templates.template')

@section ('cabecalho')
<h1 class="text-center">Lista de {{$todosEquipamentos[0]->tipo}} Personagem: {{$personagem->nome}} </h1>
<hr>
@endsection

@section('conteudo')
@include('erros', ['erros' => $errors])
<div class="form-group">
  <form name="formListaEquipamento" id="formListaEquipamento" method="post" action="{{url("criarAdicionar")}}">
    @csrf
    <Label>Equipamentos do tipo {{$todosEquipamentos[0]->tipo}}</LAbel>
    <select class="form-control" name="id_equipamento" id="id_equipamento" required>
      @foreach($todosEquipamentos as $equip)
      <option value="{{$equip->id}}">{{$equip->nome}} </option>
      @endforeach
    </select><br>
    <input type="hidden" name="id_personagem" id="id_personagem" value="{{$personagem->id}}" />
    <input type="hidden" name="tipo" id="tipo" value=" {{$todosEquipamentos[0]->tipo}}" />

    <Label>Informe a quantidade: </Label>
    <input type="number" style="width: 3em" name="quantidade" id="quantidade" min="0" value="1" oninput="validity.valid||(value='');" /><br>
    <input type="submit" value="Adicionar" class="btn btn-primary">
    </form>
    <br>
</div>


<div class="col-13 m-auto">
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">id Cadastro</th>
        <th scope="col">id Equipamento</th>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Dano</th>
        <th scope="col">Propriedades</th>
        <th scope="col">Quantidade</th>
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
        <td>{{$equipamento->dano}}</td>
        <td>{{$equipamento->propriedade}}</td>
        <td>{{$equipamento->quantidade}}</td>

        <td>
          <a href="{{url("equipamentos/$equipamento->id")}}">
            <button class="btn btn-dark"> Visualizar </button>
          </a>
          <form name="formListaEquipamentoRemov" id="formListaEquipamentoRemov" method="post" action="{{url("remover")}}">
            @csrf
            <input type="hidden" name="id_personagem" id="id_personagem" value="{{$personagem->id}}" />
            <input type="hidden" name="id_equipamento" id="id_equipamento" value="{{$equipamento->id}}" />
            <input type="hidden" name="tipo" id="tipo" value=" {{$equipamento->tipo}}" />

           
            <input style="width: 3em" type="number" name="quantidade" id="quantidade" min="0" value="0" oninput="validity.valid||(value='');" />
            <input type="submit" value="Remover quantidade" class="btn btn-primary">
          </form>
          <a href="{{url("destroyEquipamentoPersonagem/$equipamento->id_cadastro/$equipamento->tipo")}}" class="js-delEQUIP">
            <button class="btn btn-danger"> Deletar Equipamento </button>
          </a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection