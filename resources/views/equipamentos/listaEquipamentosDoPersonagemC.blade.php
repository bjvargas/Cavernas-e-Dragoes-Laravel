@extends('templates.template')

@section ('cabecalho')
<h1 class="text-center">Lista de Equipamentos do Personagem: {{$personagem->nome}} </h1>
<hr>
@endsection

@section('conteudo')

@include('erros', ['erros' => $errors])
<div class="form-group">
  <form name="formListaEquipamento2" id="formListaEquipamento2" method="post" action="{{url("criarAdicionarC")}}">
    @csrf
    <Label>Equipamentos Consumiveis:</Label>
    <select class="form-control" name="equipamento_id" id="equipamento_id" required>
      @foreach($todosEquipamentosConsumivel as $equipC)
      <option value="{{$equipC->id}}">{{$equipC->nome}}</option>
      @endforeach
    </select><br>
    <input type="hidden" name="personagem_id" id="personagem_id" value="{{$personagem->id}}" />
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
        <th scope="col">id Equipamnto</th>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
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
        <td>{{$equipamento->propriedade}}</td>
        <td>{{$equipamento->quantidade}}</td>

        <td>


          <a href="{{url("equipamentos/$equipamento->id")}}">
            <button class="btn btn-dark"> Visualizar </button>
          </a>
          <form name="formListaEquipamentoRemov" id="formListaEquipamentoRemov" method="post" action="{{url("removerC")}}">
            @csrf
            <input type="hidden" name="personagem_id" id="personagem_id" value="{{$personagem->id}}" />
            <input type="hidden" name="equipamento_id" id="equipamento_id" value="{{$equipamento->id}}" />

            <input style="width: 3em" type="number" name="quantidade" id="quantidade" min="0" value="0" oninput="validity.valid||(value='');" />
            <input type="submit" value="Remover quantidade" class="btn btn-primary">
          </form>

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