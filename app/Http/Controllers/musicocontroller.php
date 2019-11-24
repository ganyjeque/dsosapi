<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\musico;

class musicocontroller extends Controller
{
    public function adicionar(Request $request){
        $musico = new Musico();
        
        $musico ->nomeartistico = $request->input('nomeartistico'); 
        $musico ->autenticacao_id = $request->input('autenticacao_id');
  
        $musico->save();
        return response()->json($musico);
      }
      
      public function mostrar(){
        $musico = Musico:: all();
        return response()->json($musico);
      }
  
      public function mostrarporid($id){
        $musico = Musico:: find($id);
  
        if($utilizador){
          return response()->json($musico);
        }else{
          return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
      }
  
      public function remover($id){
        $musico = Musico:: find($id);
  
        if($musico){
            $musico -> delete();
            return response()->json($musico);
        }else{
            return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
    }
  }
  