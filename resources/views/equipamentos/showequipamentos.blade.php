@extends('templates.templateequipamento')

@section('cabecalho')
    <h1 class="text-center">{{$equipamento->nome}}</h1>
	@endsection
	@section('conteudo')

    <div class="col-8 m-auto">
    <div>

    Tipo: {{$equipamento->tipo}}<br>
    Preço: {{$equipamento->preco}}<br>
    CA: {{$equipamento->ca}}<br>
    Força: {{$equipamento->forca}}<br>
    Furtividade: {{$equipamento->furtividade}}<br>
    Peso: {{$equipamento->peso}}<br>
    Dano: {{$equipamento->dano}}<br>
    Propriedades: {{$equipamento->propriedade}}<br>
    Descrição: {{$equipamento->descricao}}<br>

@endsection