<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    // Relaciones
    public function direccion()
    {
        return $this->hasMany('App\Direccion');
    }
}
