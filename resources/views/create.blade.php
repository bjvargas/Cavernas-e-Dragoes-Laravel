@extends('templates.template')

@section('content')
<h1 class="text-center">Criando Ficha Personagem</h1>
<div class="col-8 m-auto">
<!-- 
  @if($errors->any())
  ...
  @endif
  Outra forma de Exibir erros de validação
 -->  

      @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
          @foreach($errors->all() as $erro)
            {{$erro}} <br>
          @endforeach
      </div>
      @endif
  <form name="formPersonagem" id="formPersonagem" method="post" action="{{url("personagens")}}">
    @csrf
    <div class="form-group">
      <select class="form-control" name="id_user" id="id_user" required>
        <option>Selecione Jogador</option>
        @foreach($users as $oUsuario)
          <option value="{{$oUsuario->id}}">{{$oUsuario->name}}</option>
        @endforeach
      </select>
    </div><br>
    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Personagem:" required><br>
    <div class="form-group">
      <select class="form-control" name="classe" id="classe" required>
        <option value="Guerreiro">Guerreiro</option>
        <option value="Barbaro">Bárbaro</option>
        <option value="Bardo">Bardo</option>
        <option value="Feiticeiro">Feiticeiro</option>
      </select>
    </div><br>
    <div class="form-group">
      <select class="form-control" name="raca" id="raca" required>
        <option value="Humano">Humano</option>
        <option value="Anão">Anão</option>
        <option value="Elfo">Elfo</option>
      </select>
    </div>
    Força: <input class="form-control" type="number" value="8" name="forca" id="forca" required>
    Destreza: <input class="form-control" type="number" value="8" name="destreza" id="destreza" required>
    Constituição: <input class="form-control" type="number" value="8" name="constituicao" id="constituicao" required>
    Inteligência: <input class="form-control" type="number" value="8" name="inteligencia" id="inteligencia" required>
    Sabedoria: <input class="form-control" type="number" value="8" name="sabedoria" id="sabedoria" required>
    Carisma: <input class="form-control" type="number" value="8" name="carisma" id="carisma" required><br>

    <input type="submit" value="Criar" class="btn btn-primary">
  </form>


</div>
@endsection