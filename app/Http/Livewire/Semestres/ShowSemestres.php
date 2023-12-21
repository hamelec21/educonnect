<?php

namespace App\Http\Livewire\Semestres;

use App\Models\Semestre;
use Livewire\Component;

class ShowSemestres extends Component
{
    public function render()
    {
        $semestres = Semestre::all();
        return view('livewire.semestres.show-semestres',compact('semestres'));
    }
}
