@extends('templates.template')

@section('content')

    <!-- Página para edição de dados de um cliente -->
    <h1 class="text-center">Editar</h1><hr>
              <div> 
                <a href="/../clientes">
                    <button class="btn btn-dark">Voltar</button>
                </a>
               </div>
    <div class="text-center">

        <!-- Exibição de problemas na validação, se houver algum -->
        @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach ($errors->all() as $erro)
                {{$erro}}
            @endforeach
        </div>
        @endif

        <!-- Formulário de edição -->
        <form name="formEdit" id="formEdit" method="post" action="{{url("cliente/$client->id")}}">
                                    @method('PUT')      
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome completo: " value="{{$client->nome ?? ''}}" required> 
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone: " value="{{$client->telefone ?? ''}}" required> 
            <input class="form-control" type="text" name="email" id="email" placeholder="Email: " value="{{$client->email ?? ''}}" required> 
            <input class="form-control" type="text" name="cpfCnpj" id="cpfCnpj" placeholder="Cpf/Cnpj: " value="{{$client->cpfCnpj ?? ''}}" required> 
            <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço: " value="{{$client->endereco ?? ''}}" required> 
            <input class="form-control" type="text" name="cep" id="cep" placeholder="Cep: " value="{{$client->cep ?? ''}}" required> 
            <input class="form-control" type="text" name="logradouro" id="logradouro" placeholder="Logradouro: " value="{{$client->logradouro ?? ''}}" required> 
            <input class="form-control" type="text" name="observacoes" id="observacoes" placeholder="Observações: " value="{{$client->observacoes ?? ''}}"> 
            <input class="form-control" type="text" name="numero" id="numero" placeholder="Número: " value="{{$client->numero ?? ''}}"> 
            <input class="form-control" type="text" name="estado" id="estado" placeholder="Estado: " value="{{$client->estado ?? ''}}" required> 
            <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro: " value="{{$client->bairro ?? ''}}" required> 
            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade: " value="{{$client->cidade ?? ''}}" required> 
            <input class="form-control" type="text" name="complemento" id="complemento" placeholder="Complemento: " value="{{$client->complemento ?? ''}}"> 
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>
               
@endsection