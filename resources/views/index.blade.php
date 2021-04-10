@extends('templates.template')

@section('content')
    <h1 class="text-center">Até mais e Obrigado pelos Peixes...</h1>

    <div class="text-center mt-3 mb-4">    
    <a href="{{url("personagens/create")}}">
              <button class="btn btn-success"> Cadastrar </button>
          </a>       
    </div> 

    <div class="col-8 m-auto">
       <table class="table text-center">
         <thead class="table-dark">
          <tr>
            <th scope="col">Id Personagem</th>
            <th scope="col">Nome</th>
            <th scope="col">Jogador</th>
            <th scope="col">Opções</th>
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
          <a href="{{url("personagens/$personagem->id")}}">
           <button class="btn btn-dark"> Visualizar </button>
          </a>      
          
          <a href="">
           <button class="btn btn-primary"> Editar </button>
          </a>      

          <a href="">
           <button class="btn btn-danger"> Deletar </button>
          </a>      
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>
@endsection