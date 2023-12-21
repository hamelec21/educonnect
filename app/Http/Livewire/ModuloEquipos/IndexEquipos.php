<?php

namespace App\Http\Livewire\ModuloEquipos;

use App\Models\Equipo;
use DB;
use Livewire\Component;

class IndexEquipos extends Component
{

    public function render()
    {
        //Card uno corresponde al carro 1
        $total_equipo = DB::table('equipos')->where('carros_id','1')->get();
        $total_prestado = DB::table('equipos')->where('carros_id','1')->where('status_id','2')->get();
        $total_disponible = DB::table('equipos')->where('carros_id','1')->where('status_id','1')->get();
        //carro 2
        //Card uno corresponde al carro 2
        $total_equipoc2 = DB::table('equipos')->where('carros_id','2')->get();
        $total_prestadoc2 = DB::table('equipos')->where('carros_id','2')->where('status_id','2')->get();
        $total_disponiblec2 = DB::table('equipos')->where('carros_id','2')->where('status_id','1')->get();

        //Card uno corresponde al carro 3
        $total_equipoc3 = DB::table('equipos')->where('carros_id','3')->get();
        $total_prestadoc3 = DB::table('equipos')->where('carros_id','3')->where('status_id','2')->get();
        $total_disponiblec3 = DB::table('equipos')->where('carros_id','3')->where('status_id','1')->get();

         //Card uno corresponde al carro 3
         $total_equipoc4 = DB::table('equipos')->where('carros_id','4')->get();
         $total_prestadoc4 = DB::table('equipos')->where('carros_id','4')->where('status_id','2')->get();
         $total_disponiblec4 = DB::table('equipos')->where('carros_id','4')->where('status_id','1')->get();


         //total equipos de los carros

         $total_equipos = DB::table('equipos')->get();



        return view('livewire.modulo-equipos.index-equipos',compact('total_equipo','total_prestado','total_disponible',
        'total_equipoc2','total_prestadoc2','total_disponiblec2','total_equipoc3','total_prestadoc3',
        'total_disponiblec3','total_equipoc4','total_prestadoc4','total_disponiblec4','total_equipos'));
    }
}
