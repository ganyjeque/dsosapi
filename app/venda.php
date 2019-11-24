<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venda extends Model
{
    protected $table = 'vendas';
    protected $fillable = ['data','hora','vendedor_nuit','localizacao_id'];

    public function vendedor()
    {
        return $this->hasOne('App\vendedor');
    }

    public function localizacao()
    {
        return $this->hasOne('App\localizacao');
    }
}
