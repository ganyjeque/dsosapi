<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\localizacao;

class localizacaocontroller extends Controller
{
    public function adicionar(Request $request){
        $localizacao = new Localizacao();
        
        $localizacao ->latitude = $request->input('latitude'); 
        $localizacao ->longitude = $request->input('longitude'); 
        $localizacao ->vendedor_nuit = $request->input('vendedor_nuit');
  
        $localizacao->save();
        return response()->json($localizacao);
      }
      
      public function mostrar(){
        $localizacao = Localizacao:: all();
            return response()->json($localizacao);
      }
  
      public function mostrarporid($id){
        $localizacao = Localizacao:: find($id);
  
        if($localizacao){
          return response()->json($localizacao);
        }else{
          return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
      }
    }