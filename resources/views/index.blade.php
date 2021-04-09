@extends('templates.template')

@section('content')
    <h1 class="text-center">Até mais e Obrigado pelos Peixes...</h1>

    <div class="text-center mt-3 mb-4">    
    <a ref="">
              <button class="bnt bnt-dark"> Visualizar </button>
          </a>       
    </div> 

    <div class="col-8 m-auto">
    <table class="table text-center">
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
      <td>
          <a ref=""> 
           <button class="bnt bnt-dark"> Visualizar </button>
          </a>      
          
          <a ref="">
           <button class="bnt bnt-primary"> Editar </button>
          </a>      

          <a ref="">
           <button class="bnt bnt-danger"> Deletar </button>
          </a>      
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>
@endsection