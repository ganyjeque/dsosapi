<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autenticacao extends Model
{
    protected $table = 'autenticacao';
    protected $fillable = ['username','senha'];
    

    public function utilizador()
    {
        return $this->hasOne('App\utilizador');
    }

    public function musico()
    {
        return $this->hasOne('App\musico');
    }

    public function vendedor()
    {
        return $this->hasOne('App\vendedor');
    }
}
