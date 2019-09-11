<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';
    protected $fillable = ['nombre', 'descripcion', 'status_id'];
    public $timestamps = false;

    // Relaciones
    public function status()
    {
        return $this->hasOne('App\Status', 'id', 'status_id');
    }
}
