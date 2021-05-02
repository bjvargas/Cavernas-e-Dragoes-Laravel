@extends('templates.template')

@section ('cabecalho')
<h1 class="text-center">Lista de Equipamentos do Personagem: {{$personagem->nome}} </h1>
<hr>
@endsection

@section('conteudo')

<form name="formListaEquipamento" id="formListaEquipamento" method="post" action="{{url("listaequipamentos")}}">
  @csrf
  <div class="form-group">
    <Label>Equipamentos de Ataque:</LAbel>
    <select class="form-control" name="id_equipamento" id="id_equipamento" required>
      @foreach($todosEquipamentosAtaque as $equipA)
      <option  value="{{$equipA->id}}">{{$equipA->nome}} </option>      
      @endforeach
      <input type="hidden" name="id_personagem" id="id_personagem" value="{{$personagem->id}}" />
    </select><br>
    <input type="submit" value="Adicionar" class="btn btn-primary">
<br>
</form>
<form name="formListaEquipamento1" id="formListaEquipamento1" method="post" action="{{url("listaequipamentos")}}">
  @csrf
    <Label>Equipamentos de Defesa:</LAbel>
    <select class="form-control" name="id_equipamento" id="id_equipamento" required >
      @foreach($todosEquipamentosDefesa as $equipD)
      <option value="{{$equipD->id}}">{{$equipD->nome}}</option>      
      @endforeach
      <input type="hidden" name="id_personagem" id="id_personagem" value="{{$personagem->id}}" />
      <br>
      <input type="submit" value="Adicionar" class="btn btn-primary">
    </select>
  </form>  
<br>
<form name="formListaEquipamento2" id="formListaEquipamento2" method="post" action="{{url("listaequipamentos")}}">
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
<form name="formListaEquipamento2" id="formListaEquipamento2" method="post" action="{{url("listaequipamentos")}}">
  @csrf
    <Label>Outros Equipamentos:</LAbel>
    <select class="form-control" name="id_equipamento" id="id_equipamento" required >
      @foreach($todosEquipamentosOutro as $equipO)
      <option value="{{$equipO->id}}">{{$equipO->nome}}</option>      
      @endforeach
      <input type="hidden" name="id_personagem" id="id_personagem" value="{{$personagem->id}}" />
    </select><br>
    <input type="submit" value="Adicionar" class="btn btn-primary">
  
  </div><br>
  <div class="text-center mt-3 mb-4">
    
</form>

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
        <th scope="col">CA</th>
        <th scope="col">Dano</th>
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
        <td>{{$equipamento->ca}}</td>
        <td>{{$equipamento->dano}}</td>
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