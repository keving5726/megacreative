<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $guarded = ['id, created_at, updated_at'];

    // Relaciones
    public function sexo()
    {
        return $this->hasOne('App\Sexo', 'id', 'sexo_id');
    }

    public function carrera()
    {
        return $this->hasOne('App\Carrera', 'id', 'carrera_id');
    }

    public function status()
    {
        return $this->hasOne('App\Status', 'id', 'status_id');
    }

    public function pais()
    {
        return $this->hasOne('App\Pais', 'id', 'pais_id');
    }

    public function estado()
    {
        return $this->hasOne('App\Estado', 'id', 'estado_id');
    }

    public function ciudad()
    {
        return $this->hasOne('App\Ciudad', 'id', 'ciudad_id');
    }
}
