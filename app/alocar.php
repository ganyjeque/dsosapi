<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alocar extends Model
{
    protected $table = 'alocars';
    protected $fillable = ['data','vendedor_nuit','musico_bi','albuns_id'];

    public function vendedor()
    {
        return $this->hasOne('App\vendedor');
    }

    public function musico()
    {
        return $this->hasOne('App\musico');
    }

    public function albuns()
    {
        return $this->hasOne('App\albuns');
    }
}
