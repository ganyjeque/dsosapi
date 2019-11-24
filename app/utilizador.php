<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilizador extends Model
{
    protected $table = 'utilizadors';
    protected $fillable = ['nome','apelido', 'autenticacao_id'];
    
    public function autenticacao()
    {
        return $this->hasOne('App\autenticacao');
    }
   
}
