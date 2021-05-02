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
      <select class="form-control" name="id_classe" id="id_classe" required>
      @foreach($classes as $classe)
      <option value="{{$classe->id}}">{{$classe->nome}}</option>
      @endforeach

     </select>
        @else
      <div class="form-group">
      <select class="form-control" name="id_classe" id="id_classe" required>
      <option value="" > Selecione sua Classe </option>
      @foreach($classes as $classe)
      <option value="{{$classe->id}}">{{$classe->nome}}</option>
      @endforeach
           
      </select>
      @endif

   
      
    </div><br>
    <div class="form-group">
      <select class="form-control" name="raca" id="raca" required>
      <option value="{{$personagem->raca ?? ''}}" >@if(isset($personagem)) {{$personagem->raca}} @else Selecione sua Raça @endif</option>
        <option value="Humano">Humano</option>
        <option value="Anão">Anão</option>
        <option value="Elfo">Elfo</option>
      </select>
    </div>
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