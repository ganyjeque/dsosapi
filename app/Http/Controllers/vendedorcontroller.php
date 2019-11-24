<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vendedor;

class vendedorcontroller extends Controller
{
    public function adicionar(Request $request){
        $vendedor = new Vendedor();
        
        $vendedor ->bi = $request->input('bi'); 
        $vendedor ->nome = $request->input('nome');
        $vendedor ->autenticacao_id = $request->input('autenticacao_id');
  
        $vendedor->save();
        return response()->json($vendedor);
      }
      
      public function mostrar(){
        $vendedor = Vendedor:: all();
        return response()->json($vendedor);
      }
  
      public function mostrarporid($id){
        $vendedor = Vendedor:: find($id);
  
        if($vendedor){
          return response()->json($vendedor);
        }else{
          return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
      }
  
      public function remover($id){
        $vendedor = Vendedor:: find($id);
  
        if($vendedor){
            $vendedor -> delete();
            return response()->json($vendedor);
        }else{
            return response()->json(['Erro'=>'Nao existe o: '.$id.''], 404);
  
        }
    }
  }
  