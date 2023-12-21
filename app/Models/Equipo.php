<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = "equipos";

    protected $fillable = ['numero_equipo','carros_id','status_id','tipo_equipo_id'];

    public function devolucion()
    {
        return $this->hasMany(DevolucionEquipo::class,'id');
    }


    public function prestamos()
    {
        return $this->hasMany( Prestamo_equipo::class, 'id');

    }





}
