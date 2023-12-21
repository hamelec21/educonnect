<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucion_equipo extends Model
{
    protected $table = "devolucion_equipos";

    protected $fillable = ['status_id','alumnos_id','equipos_id','carros_id','numero_equipo'];
    use HasFactory;

    public function Alumno()
    {
        return $this->belongsTo( Alumno::class, 'alumnos_id');
    }


    public function estado()
    {
        return $this->belongsTo( estado::class, 'status_id');
    }


    public function equipo()
    {
        return $this->belongsTo( equipo::class, 'equipos_id');
    }

}
