@extends('templates.template')

@section('content')

    <!-- Página para exibir dados de um cliente específico -->
    <h1 class="text-center">Cliente: {{$client->nome}}</h1><hr>
    
   
    <div class="text-center">
           <th scope="row">Id: {{$client->id}}</th><br>
                <th>Telefone: {{$client->telefone}}</th><br>
                <th>Email: {{$client->email}}</th><br>
                <th>Cpf/Cnpj: {{$client->cpfCnpj}}</th><br>
                <th>Endereço: {{$client->endereco}}</th><br>
                <th>Cep: {{$client->cep}}</th><br>
                <th>Logradouro: {{$client->logradouro}}</th><br>
                <th>Número: {{$client->numero}}</th><br>
                <th>Estado: {{$client->estado}}</th><br>
                <th>Observações: {{$client->observacoes}}</th><br>
                <th>Bairro: {{$client->bairro}}</th><br>
                <th>Cidade: {{$client->cidade}}</th><br>
                <th>Complemento: {{$client->complemento}}</th><br>
    </div>
               <div class="text-center"> 
                <a href="../clientes">
                    <button class="btn btn-dark">Voltar</button>
                </a>
               </div> 
@endsection