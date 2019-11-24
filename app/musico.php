<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class musico extends Model
{
    protected $table = 'musicos';
    protected $fillable = ['nomeartistico', 'autenticacao_id'];

    public function autenticacao()
    {
        return $this->hasOne('App\autenticacao');
    }
}
