<?php

namespace App\Http\Livewire\Frontend\Carro3;

use App\Models\Alumno;
use App\Models\Devolucion_equipo;
use App\Models\Equipo;
use App\Models\Prestamo_equipo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;
class CrearDevolucion extends Component
{
    public $selected = [];
    public $rut;
    public $query;
    public $numero_equipo;

    protected $rules = [
        'selected' => 'required',
    ];


    public function mount($rut)

    {
       $this->rut = $rut;
       $this->query = Alumno::where('rut', $this->rut)->first();

    }

    public function devolver()
    {
        $this->validate();

        $selectedItems = collect($this->selected)->map(function ($item) {

            return [
                'status_id' => 3, //estatus 1.-disponible o entregado
                'alumnos_id' =>$this->query->id,
                'equipos_id' => $item,
                'carros_id' => 3,
                'created_at'=>  Carbon::now(),
            ];

        });

      //  dd($this->$selected)

        DB::table('equipos')->whereIn('id', $this->selected)->update(['status_id' => 1]);

        DB::table('prestamo_equipos')->whereIn('equipos_id', $this->selected)->update(['status_id' => 1]);
      //  DB::table('devolucion_equipos')->whereIn('equipos_id', $this->selected)->update(['status_id' => 3]);

        //eliminar
         Prestamo_equipo::whereIn('equipos_id', $this->selected)->delete();

        // Si estás listo para guardar los datos en la base de datos, puedes usar el método insert
        Devolucion_equipo::insert($selectedItems->toArray());
       // Prestamo_equipo::insert($selectedItems->toArray());
        // Otra lógica de guardar o redireccionar según tus necesidades
        $this->reset(['selected']);
        $this->emit('insert');
        //sleep(2.0);
        return redirect()->to('frontend/carro3/index');  // direccionar a welcome o al Home
    }

    public function render()
    {
        $prestamos = Prestamo_equipo::where('alumnos_id',$this->query->id)->get();
        return view('livewire.frontend.carro3.crear-devolucion',compact('prestamos'));
    }
}
