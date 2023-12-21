<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Alumno;
use App\Models\Equipo;
use App\Models\Prestamo_equipo;
use COM;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;

class CrearPrestamo extends Component
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

    public function confirmar()
    {

        $this->validate();

      // Equipo::whereIn('id', $this->selected)->update(['status_id' => 2]);
        $selectedItems = collect($this->selected)->map(function ($item) {

            return [
                'status_id' => 2,
                'alumnos_id' =>$this->query->id,
                'equipos_id' => $item,
                'carros_id' => 3,
                'created_at'=>  Carbon::now(),
            ];

        });

        // Si deseas ver el resultado antes de almacenarlo en la base de datos, puedes usar dd
       // dd($selectedItems);

        DB::table('equipos')->whereIn('id', $this->selected)->update(['status_id' => 2]);
        // Si estás listo para guardar los datos en la base de datos, puedes usar el método insert

        Prestamo_equipo::insert($selectedItems->toArray());
        // Otra lógica de guardar o redireccionar según tus necesidades
        $this->reset(['selected']);
        $this->emit('insert');
        //sleep(2.0);

        return redirect()->to('frontend/index'); // direccionar a welcome o al Home

    }



    public function render()

    {
        $notebooks = Equipo::where('carros_id',4)->get(); //se muestra segun la condicion el carro
        return view('livewire.frontend.carro1.crear-prestamo',compact('notebooks'));
    }
}
