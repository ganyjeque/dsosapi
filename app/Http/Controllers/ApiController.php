<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\autenticacao;
use App\utilizador;



class ApiController extends Controller
{
    //
	public function criarautenticacao(Request $request){
		$autenticacao = new Autenticacao();
		
		$autenticacao ->username = $request->input('username'); 
		$autenticacao ->senha = $request->input('senha'); 
		
		$autenticacao->save();
		return response()->json($autenticacao);
	}

	public function mostrarautenticacao(){
		$autenticacao = Autenticacao:: all();
		return response()->json($autenticacao);
	}

	public function mostraridautenticacao($id){
		$autenticacao = Autenticacao:: find($id);

		if($autenticacao){
			return response()->json($autenticacao);
		}else{
			return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);

		}
	}
	public function removerautenticacao($id){
			$autenticacao = Autenticacao:: find($id);
	
			if($autenticacao){
				$autenticacao -> delete();
				return response()->json($autenticacao);
			}else{
				return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
	
			}
		}


	public function criarutilizador(Request $request){
		$utilizador = new Utilizador();
		
		$utilizador ->nome = $request->input('nome'); 
		$utilizador ->apelido = $request->input('apelido'); 
		$utilizador ->autenticacao_id = $request->input('autenticacao_id');

		$utilizador->save();
		return response()->json($utilizador);
	}
}
