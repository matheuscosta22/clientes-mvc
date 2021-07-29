@extends('templates.template')

@section('content')
<!-- Página para cadastro de um cliente -->
    <h1 class="text-center">Cadastrar</h1><hr>
              <div> 
                <a href="/clientes">
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

        <!-- Formulário de cadastro -->
        <form name="formCad" id="formCad" method="post" action="{{url('clientes')}}">
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome completo: " required>
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone: " required>
            <input class="form-control" type="text" name="email" id="email" placeholder="Email: " required>
            <input class="form-control" type="text" name="cpfCnpj" id="cpfCnpj" placeholder="Cpf/Cnpj: " required>
            <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço: " required>
            <input class="form-control" type="text" name="cep" id="cep" placeholder="Cep: " required>
            <input class="form-control" type="text" name="logradouro" id="logradouro" placeholder="Logradouro: " required>
            <input class="form-control" type="text" name="observacoes" id="observacoes" placeholder="Observações: ">
            <input class="form-control" type="text" name="numero" id="numero" placeholder="Número: " >
            <input class="form-control" type="text" name="estado" id="estado" placeholder="Estado: " required>
            <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro: " required>
            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade: " required>
            <input class="form-control" type="text" name="complemento" id="complemento" placeholder="Complemento: ">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
               
@endsection