<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Redirect;

//use Illuminate\Http\Request;


class ClientController extends Controller
{


    
     /**
        * Lista todos os clientes.
        *
        * @return Response
        */
        public function index(){
            $client = Client::all();
        
            return view('index', ['client'=>$client]);
        }
    
        /**
            * Leva para o formulário de cadastro.
            *
            * @return Response
            */
        public function create(){
            return view('create');
        }
    
        /**
            * Salva um novo cliente.
            *
            * @return Response
            */
        public function store(ClientRequest $request){
           
            $client = new Client();
            $client->nome = $request->input('nome');
            $client->telefone = $request->input('telefone');
            $client->email = $request->input('email');
            $client->cpfCnpj = $request->input('cpfCnpj');
            $client->endereco = $request->input('endereco');
            $client->cep = $request->input('cep');
            $client->logradouro = $request->input('logradouro');
            $client->numero = $request->input('numero');
            $client->complemento = $request->input('complemento');
            $client->bairro = $request->input('bairro');
            $client->cidade = $request->input('cidade');
            $client->estado = $request->input('estado');
            $client->observacoes = $request->input('observacoes');
            $client->save();

            return view('read', ['client'=>$client]);
        }
    
        /**
            * Exibe os dados de um cliente específico.
            *
            * @param  int  $id
            * @return Response
            */
            public function show($id){

                $client = Client::find($id);

                return view('read', ['client'=>$client]);

            }
    
        /**
            * Leva para o formulário de edição.
            *
            * @param  int  $id
            * @return Response
            */
        public function edit($id){

                $client = Client::find($id);
        
                return view('edit', ['client' => $client]);
        }
    
        /**
            * Atualiza um cliente específico.
            *
            * @param  int  $id
            * @return Response
            */
        public function update(ClientRequest $request, $id){

            $client = Client::find($id);
            $client->nome = $request->input('nome');
            $client->telefone = $request->input('telefone');
            $client->email = $request->input('email');
            $client->cpfCnpj = $request->input('cpfCnpj');
            $client->endereco = $request->input('endereco');
            $client->cep = $request->input('cep');
            $client->logradouro = $request->input('logradouro');
            $client->numero = $request->input('numero');
            $client->complemento = $request->input('complemento');
            $client->bairro = $request->input('bairro');
            $client->cidade = $request->input('cidade');
            $client->estado = $request->input('estado');
            $client->observacoes = $request->input('observacoes');
            $client->save();

            return view('read', ['client'=>$client]);

        }
    
        /**
            * Deleta um cliente específico.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id){

            $client = Client::find($id);
            $client->delete();
            return Redirect::to('clientes');
        }
}
