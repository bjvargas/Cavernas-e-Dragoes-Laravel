@extends('templates.template')

@section('content')
    <h1 class="text-center">{{$personagem->nome}}</h1>

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
				<h1 class="card-header text-center">
					Força
				</h1>
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
				<h5 class="card-header">
					<h1>Destreza</h1>
				</h5>
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
				<h5 class="card-header">
					<h1>Contituição</h1>
				</h5>
				<div class="card-body">
					<p class="card-text">
						 {{$personagem->contituicao}}
					</p>
				</div>
				<div class="card-footer">
					{{$classeUtil->converteAtributo($personagem->contituicao)}}
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="card text-white bg-info">
				<h1 class="card-header">
					Inteligencia
				</h1>
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
				<h5 class="card-header">
					<h1>Sabedoria</h1>
				</h5>
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
				<h5 class="card-header">
					<h1>Carisma</h1>
				</h5>
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
    
    
    
</div>
@endsection