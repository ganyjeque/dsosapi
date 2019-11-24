<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class single extends Model
{
    protected $table = 'singles';
    protected $fillable = ['titulo','audio','albuns_id'];

    public function albuns()
    {
        return $this->hasOne('App\albuns');
    }
}
