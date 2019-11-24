<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\autenticacao;

class autenticacaocontroller extends Controller
{
    public function adicionar(Request $request){
		$autenticacao = new Autenticacao();
		
		$autenticacao ->username = $request->input('username'); 
		$autenticacao ->senha = $request->input('senha'); 
		
		$autenticacao->save();
		return response()->json($autenticacao);
    }
    
    public function mostrar(){
		$autenticacao = Autenticacao:: all();
		return response()->json($autenticacao);
    }
    
    public function mostrarporid($id){
		$autenticacao = Autenticacao:: find($id);

		if($autenticacao){
			return response()->json($autenticacao);
		}else{
			return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);

		}
    }
    
    public function remover($id){
        $autenticacao = Autenticacao:: find($id);

        if($autenticacao){
            $autenticacao -> delete();
            return response()->json($autenticacao);
        }else{
            return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);

        }
    }
}
