<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    //
    protected $fillable = [
        'nombre'
    ];

    public function relacion()
    {
        return $this->hasMany(Autor::class);
    }
}
