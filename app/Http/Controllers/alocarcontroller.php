<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alocar;

class alocarcontroller extends Controller
{
    public function adicionar(Request $request){
        $alocar = new Alocar();
        
        $alocar ->data = $request->input('data'); 
        $alocar ->vendedor_nuit = $request->input('vendedor_nuit');
        $alocar ->musico_bi = $request->input('musico_bi');
        $alocar ->albuns_id = $request->input('albuns_id');
  
        $alocar->save();
        return response()->json($alocar);
      }
      
      public function mostrar(){
        $alocar = Alocar:: all();
        return response()->json($alocar);
      }
  
      public function mostrarporid($id){
        $alocar = Alocar:: find($id);
  
        if($alocar){
          return response()->json($alocar);
        }else{
          return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
      }
  
      public function remover($id){
        $alocar = Alocar:: find($id);
  
        if($alocar){
            $alocar -> delete();
            return response()->json($alocar);
        }else{
            return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
    }
  }
  