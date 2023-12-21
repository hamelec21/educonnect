<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

//CODIGO PARA BUSQUEDA
    public function scopeBuscar($query, $buscar)
    {
        if ($buscar === '') {
            return;
        }
        return $query->where('nombre', 'like', '%' . $buscar . '%');
    }

    /*relacion*/
    public function alumno()
    {

        return $this->belongsTo(Alumno::class, 'cursos_id');
    }


    public function alumn()
    {
        return $this->hasMany(Alumno::class,'id');
    }

}
