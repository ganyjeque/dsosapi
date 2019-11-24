<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\utilizador;

class utilizadorcontroller extends Controller
{
    public function adicionar(Request $request){
      $utilizador = new Utilizador();
      
      $utilizador ->nome = $request->input('nome'); 
      $utilizador ->apelido = $request->input('apelido'); 
      $utilizador ->autenticacao_id = $request->input('autenticacao_id');

      $utilizador->save();
      return response()->json($utilizador);
    }
    
    public function mostrar(){
      $utilizador = Utilizador:: all();
		  return response()->json($utilizador);
    }

    public function mostrarporid($id){
      $utilizador = Utilizador:: find($id);

      if($utilizador){
        return response()->json($utilizador);
      }else{
        return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);

      }
    }

    public function remover($id){
      $utilizador = Utilizador:: find($id);

      if($utilizador){
        $utilizador -> delete();
          return response()->json($utilizador);
      }else{
          return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);

      }
  }
}
