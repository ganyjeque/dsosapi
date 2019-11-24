<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\venda;

class vendacontroller extends Controller
{
    public function adicionar(Request $request){
        $venda = new Venda();
        
        $venda ->data = $request->input('data'); 
        $venda ->hora = $request->input('hora');
        $venda ->vendedor_nuit = $request->input('vendedor_nuit');
        $venda ->localizacao_id = $request->input('localizacao_id');
  
        $venda->save();
        return response()->json($venda);
      }
      
      public function mostrar(){
        $venda = Venda:: all();
        return response()->json($venda);
      }
  
      public function mostrarporid($id){
        $venda = Venda:: find($id);
  
        if($venda){
          return response()->json($venda);
        }else{
          return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
      }
  
      public function remover($id){
        $venda = Venda:: find($id);
  
        if($venda){
            $venda -> delete();
            return response()->json($venda);
        }else{
            return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
    }
  }
  