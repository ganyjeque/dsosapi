<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class albuns extends Model
{
    protected $table = 'albuns';
    protected $fillable = ['image','titulo','genero','ano','descricao','musico_bi'];

    public function musico()
    {
        return $this->hasOne('App\musico');
    }
}
