<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table= 'status';
    protected $fillable = ['nombre'];


    public function scopeBuscar($query, $buscar)
    {
        if ($buscar === '') {
            return;
        }
        return $query->where('nombre', 'like', '%' . $buscar . '%');
    }


    public function prestamos()
    {
        return $this->hasMany( Prestamo_equipo::class, 'id');

    }

    public function devolucion()
    {
        return $this->hasMany(DevolucionEquipo::class,'id');
    }



}
