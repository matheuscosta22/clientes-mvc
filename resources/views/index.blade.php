@extends('templates.template')

@section('content')

    <!-- Página inicial do sistema -->

    <h1 class="text-center">Clientes</h1><hr>

    <!-- Botão para ir para o cadastro -->
    <div class="text-center">
      <a href="{{url('clientes/cadastrar')}}">
         <button class="btn btn-success">Cadastrar</button>
      </a>
    </div>

    <!-- Tabela com os dados dos clientes -->
    <div class="m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
               <th scope="col">Id</th>
               <th scope="col">Nome completo</th>
               <th scope="col">Telefone</th>
               <th scope="col">Email</th> 
               <th scope="col">Cpf/Cnpj</th>
               <th scope="col">Endereço</th>
               <th scope="col">Cep</th>
               <th scope="col">Logradouro</th>
               <th scope="col">Número</th>
               <th scope="col">Estado</th>
               <th scope="col">Observações</th>
               <th scope="col">Bairro</th>
               <th scope="col">Cidade</th>
               <th scope="col">Complemento</th>
            </tr>
            </thead>
            <tbody>

                @foreach($client as $clients)
            <tr class="text-center">
                <th scope="row">{{$clients->id}}</th> 
                <th>{{$clients->nome}}</th>
                <th>{{$clients->telefone}}</th>
                <th>{{$clients->email}}</th>
                <th>{{$clients->cpfCnpj}}</th>
                <th>{{$clients->endereco}}</th>
                <th>{{$clients->cep}}</th>
                <th>{{$clients->logradouro}}</th>
                <th>{{$clients->numero}}</th>
                <th>{{$clients->estado}}</th>
                <th>{{$clients->observacoes}}</th>
                <th>{{$clients->bairro}}</th>
                <th>{{$clients->cidade}}</th> 
                <th>{{$clients->complemento}}</th>          
            </tr>
            <td> 
                
                <!-- Botão para obter os dados de um cliente -->
                <a href="{{url("cliente/$clients->id")}}">
                    <button class="btn btn-dark">Visualizar</button>
                </a>

                <!-- Botão para editar os dados de um cliente -->
                <a href="{{url("cliente/$clients->id/editar")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>

                <!-- Botão para deletar um cliente -->
                <form action="{{url("cliente/$clients->id")}}" method="post">
                @csrf
                       @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Deletar">
                </form>

            </td>
                @endforeach
            

            
            </tbody>     
        </table>    
    </div>
@endsection
