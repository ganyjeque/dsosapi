<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\albuns;

class albunscontroller extends Controller
{
    public function adicionar(Request $request){
        $albuns = new Albuns();
        
        $albuns ->image = $request->input('image'); 
        $albuns ->titulo = $request->input('titulo');
        $albuns ->genero = $request->input('genero');
        $albuns ->ano = $request->input('ano');
        $albuns ->descricao = $request->input('descricao');
        $albuns ->musico_bi = $request->input('musico_bi');
  
        $albuns->save();
        return response()->json($albuns);
      }
      
      public function mostrar(){
        $albuns = Albuns:: all();
        return response()->json($albuns);
      }
  
      public function mostrarporid($id){
        $albuns = Albuns:: find($id);
  
        if($albuns){
          return response()->json($albuns);
        }else{
          return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
      }
  
      public function remover($id){
        $albuns = Albuns:: find($id);
  
        if($albuns){
            $albuns -> delete();
            return response()->json($albuns);
        }else{
            return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
    }
  }
  