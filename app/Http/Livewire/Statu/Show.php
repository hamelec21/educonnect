<?php

namespace App\Http\Livewire\Statu;

use App\Models\Estado;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{

    public $search;
    use WithPagination;
    protected $listeners = ['render' => 'render'];
   public function updatingSearch()
     {
        $this->resetPage();
    }

    public function destroy($id)
    {
        Estado::destroy($id);
    }


    public function render()
    {
        $estados = Estado::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.statu.show',compact('estados'));
    }
}
