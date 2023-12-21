<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['rut','nombres','apellido_paterno','apellido_materno','fecha_nacimiento','edad','cursos_id'];

    public function scopeBuscar($query, $buscar)
    {
        if ($buscar === '') {
            return;
        }
        return $query->where('nombres', 'like', '%' . $buscar . '%');
    }

    /*relacion*/

    public function curso()
    {
        return $this->hasMany( Curso::class, 'id');

    }

    public function prestamos()
    {
        return $this->hasMany( Prestamo_equipo::class, 'id');

    }

    public function devolucion()
    {
        return $this->hasMany(DevolucionEquipo::class,'id');
    }


    
    public function nivel()
    {

        return $this->belongsTo(Curso::class, 'cursos_id');
    }


















}
