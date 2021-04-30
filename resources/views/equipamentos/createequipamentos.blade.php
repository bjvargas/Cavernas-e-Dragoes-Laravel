@extends('templates.template')

@section('cabecalho')
<h1 class="text-center">@if (isset($editequipamento))Editar Equipamento @else Novo Equipamento @endif</h1>
@endsection
@section('conteudo')

<div class="col-8 m-auto">

@if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
          @foreach($errors->all() as $erro)
            {{$erro}} <br>
          @endforeach
      </div>
      @endif


    @if (isset($editequipamento))
    <form name="formEditEquip" id="formEditEquips" method="post" action="{{url("equipamentos/$editequipamento->id")}}">
        @method('PUT')


    @else
<form name="formCreateEquip" id="formCreateEquips" method="post" action="{{url('equipamentos')}}">
    @endif

    @csrf
    <input class="form-control" type="text" name="nome" id="nome" placeholder="Equipamento: " value="{{$editequipamento->nome ?? ''}}" required><br>
    <div class="form-group">
      <select class="form-control" name="tipo" id="tipo" required>
      <option value="{{$equipamento->tipo ?? ''}}" >@if(isset($equipamento)) {{$equipamento->tipo}} @else Selecione o tipo de equipamento @endif</option>
        <option value="Ataque">Ataque</option>
        <option value="Defesa">Defesa</option>
        <option value="Consumivel">Consumivel</option>
        <option value="Outro">Outro</option>
      </select>
   
   
   
    <input class="form-control" type="integer" name="preco" id="preco" placeholder="Preço: " value="{{$editequipamento->preco ?? ''}}" required><br>
    <input class="form-control" type="integer" name="ca" id="ca" placeholder="CA: " value="{{$editequipamento->ca ?? ''}}" required><br>
    <input class="form-control" type="text" name="forca" id="forca" placeholder="Força: " value="{{$editequipamento->forca ?? ''}}" required><br>
    
    <div class="form-check">
                @if (isset($editequipamento))
                <input class="form-check-input" type="checkbox" name="furtividade" id="furtividade" <?php if ($editequipamento->furtividade == 1) { ?> checked="true" <?php } ?> />
                @else
                <input class="form-check-input" type="checkbox" name="furtividade" id="furtividade" />
                @endif
                <label class="form-check-label" for="furtividade"> Furtividade </label>
            </div> 
            <br>
    <input class="form-control" type="integer" name="peso" id="peso" placeholder="Peso: " value="{{$editequipamento->peso ?? ''}}" required><br>
    <input class="form-control" type="integer" name="dano" id="dano" placeholder="Dano: " value="{{$editequipamento->dano ?? ''}}" required><br>
    <input class="form-control" type="text" name="propriedade" id="propriedade" placeholder="Propriedades: " value="{{$editequipamento->propriedade ?? ''}}" required><br>
    <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição: " value="{{$editequipamento->descricao ?? ''}}" required><br>
    <input class="btn btn-primary" type="submit" value=@if (isset($editequipamento))Editar Equipamento @else Cadastrar Equipamento @endif>
</form>



</div>
@endsection