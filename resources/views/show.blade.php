@extends('templates.template')

@section('cabecalho')
<h1 class="text-center">{{$personagem->nome}}</h1>
<h3 class="text-center">{{$personagem->raca}}</h3>
<h3 class="text-center">{{$personagem->classe}}</h3>
<h3 class="text-center">HP: {{$personagem->vida}}</h3>
@endsection
@section('conteudo')

<div class="col-8 m-auto">
	@php
	use app\Http\Controllers\Util;
	$user=$personagem->find($personagem->id)->relUsers;
	$classeUtil=new Util;

	@endphp
	<div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="card text-white bg-danger">
						<h3 class="card-header text-center">
							Força
						</h3>
						<div class="card-body">
							<p class="card-text">
								{{$personagem->forca}}
							</p>
						</div>
						<div class="card-footer">
							{{$classeUtil->converteAtributo($personagem->forca)}}
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-primary">
						<h3 class="card-header">
							Destreza
						</h3>
						<div class="card-body">
							<p class="card-text">
								{{$personagem->destreza}}
							</p>
						</div>
						<div class="card-footer">
							{{$classeUtil->converteAtributo($personagem->destreza)}}
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-info">
						<h3 class="card-header">
							Contituição
						</h3>
						<div class="card-body">
							<p class="card-text">
								{{$personagem->constituicao}}
							</p>
						</div>
						<div class="card-footer">
							{{$classeUtil->converteAtributo($personagem->constituicao)}}
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card text-white bg-info">
						<h3 class="card-header">
							Inteligencia
						</h3>
						<div class="card-body">
							<p class="card-text">
								{{$personagem->inteligencia}}
							</p>
						</div>
						<div class="card-footer">
							{{$classeUtil->converteAtributo($personagem->inteligencia)}}
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-default">
						<h3 class="card-header">
							Sabedoria
						</h3>
						<div class="card-body">
							<p class="card-text">
								{{$personagem->sabedoria}}
							</p>
						</div>
						<div class="card-footer">
							{{$classeUtil->converteAtributo($personagem->sabedoria)}}
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-warning">
						<h3 class="card-header">
							Carisma
						</h3>
						<div class="card-body">
							<p class="card-text">
								{{$personagem->carisma}}
							</p>
						</div>
						<div class="card-footer">
							{{$classeUtil->converteAtributo($personagem->carisma)}}
						</div>
					</div>
				</div>
			</div>
		</div>


<div class="col-10 m-auto">

  <table class="table text-center">
    <thead class="table-dark">
      <tr>
        <th scope="col">Nome Magia</th>
        <th scope="col">ALcance</th>
      </tr>
    </thead>
    <tbody>

	@foreach($magias as $magia)
      <tr>
        <th scope="row">{{$magia->nome}}</th>
        <td>{{$magia->alcance}}</td>       
      </tr>
      @endforeach
    </tbody>
		<a href="{{url("showListaMagias/$personagem->id")}}">
            <button class="btn btn-dark"> Ver detalher e adicionar novas magias </button>
          </a>
  </table>
</div>
	@endsection