<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendedor extends Model
{
    protected $table = 'vendedors';
    protected $fillable = ['bi','nome','autenticacao_id'];

    public function autenticacao()
    {
        return $this->hasOne('App\autenticacao');
    }
}
