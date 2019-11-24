<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localizacao extends Model
{
    protected $table = 'localizacaos';
    protected $fillable = ['latitude','longitude','vendedor_nuit'];

    public function vendedor()
    {
        return $this->hasOne('App\vendedor');
    }
}
