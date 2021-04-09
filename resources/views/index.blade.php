@extends('templates.template')

@section('content')
    <h1 class="text-center">Até mais e Obrigado pelos Peixes...</h1>
    <div class="col-8 m-auto">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Personagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Jogador</th>
      <th scope="col">Quantidade Personagens</th>
    </tr>
  </thead>
  <tbody>

    @foreach($listaPersonagens as $personagem)
        @php
            $user=$personagem->find($personagem->id)->relUsers;
        @endphp
    <tr>
      <th scope="row">{{$personagem->id}}</th>
      <td>{{$personagem->nome}}</td>
      <td>{{$user->name}}</td>
      <td>@mdo</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>
@endsection