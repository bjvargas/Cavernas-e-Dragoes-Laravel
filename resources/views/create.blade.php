@extends('templates.template')

@section('cabecalho')
<h1 class="text-center">@if (isset($personagem))Editar Personagem @else Criando Ficha Personagem @endif</h1>
@endsection
@section('conteudo')

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

      @if (isset($personagem))
      <form name="formEdit" id="formEdit" method="post" action="{{url("personagens/$personagem->id")}}">
        @method('PUT')
        @else
        <form name="formPersonagem" id="formPersonagem" method="post" action="{{url("personagens")}}">
      @endif
    @csrf

    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Personagem:" value="{{$personagem->nome ?? ''}}" required><br>

    @if (isset($personagem))
    <div class="form-group">
      <select class="form-control" name="classe_id" id="classe_id" required>
      @foreach($classes as $classe)
      <option value="{{$classe->id}}">{{$classe->nome}}</option>
      @endforeach

     </select>
     </div>
        @else
      <div class="form-group">
      <select class="form-control" name="classe_id" id="classe_id" required>
      <option value="" > Selecione sua Classe </option>
      @foreach($classes as $classe)
      <option value="{{$classe->id}}">{{$classe->nome}}</option>
      @endforeach
           
      </select>
      </div>
      @endif
      @if (isset($personagem))
      <div class="form-group">
      <select class="form-control" name="raca_id" id="raca_id" required>
      @foreach($racas as $raca)
      <option value="{{$raca->id}}">{{$raca->nome}}</option>
      @endforeach

     </select>
      </div>
        @else
      <div class="form-group">
      <select class="form-control" name="raca_id" id="raca_id" required>
      <option value="" > Selecione sua Raça </option>
      @foreach($racas as $raca)
      <option value="{{$raca->id}}">{{$raca->nome}}</option>
      @endforeach

      </select>
      </div>
      @endif

      
       Força: <input class="form-control" type="number" value="{{$personagem->forca ?? 8 }}" name="forca" id="forca" required>
    Destreza: <input class="form-control" type="number" value="{{$personagem->destreza ?? 8 }}" name="destreza" id="destreza" required>
    Constituição: <input class="form-control" type="number" value="{{$personagem->constituicao ?? 8 }}" name="constituicao" id="constituicao" required>
    Inteligência: <input class="form-control" type="number" value="{{$personagem->inteligencia ?? 8 }}" name="inteligencia" id="inteligencia" required>
    Sabedoria: <input class="form-control" type="number" value="{{$personagem->sabedoria ?? 8 }}" name="sabedoria" id="sabedoria" required>
    Carisma: <input class="form-control" type="number" value="{{$personagem->carisma ?? 8 }}" name="carisma" id="carisma" required><br>

    <input type="submit" value="@if (isset($personagem))Editar Personagem @else Criar @endif" class="btn btn-primary">
  </form>


</div>
@endsection