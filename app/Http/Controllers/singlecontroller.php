<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\single;

class singlecontroller extends Controller
{
    public function adicionar(Request $request){
        $single = new Single();
        
        $single ->titulo = $request->input('titulo'); 
        $single ->audio = $request->input('audio');
        $single ->albuns_id = $request->input('albuns_id');
  
        $single->save();
        return response()->json($single);
      }
      
      public function mostrar(){
        $single = Single:: all();
        return response()->json($single);
      }
  
      public function mostrarporid($id){
        $single = Single:: find($id);
  
        if($single){
          return response()->json($single);
        }else{
          return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
      }
  
      public function remover($id){
        $single = Single:: find($id);
  
        if($single){
            $single -> delete();
            return response()->json($single);
        }else{
            return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
    }
  }
  