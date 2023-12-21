<?php

namespace App\Http\Livewire\Seguridad\Usuario;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;
class CrearUsuario extends Component
{
    public $open_crear =false;
    public $usuario;
    public $selectedRoles = [];
    public $name;
    public $email;
    public $password;
    public function mount(User $usuario)
    {
        $this->usuario = $usuario;
        $this->selectedRoles = $usuario->roles->pluck('name')->toArray();
    }
    public function save()
    {
        $usuario = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->usuario->syncRoles($this->selectedRoles);
        $usuario->assignRole($this->selectedRoles);
        $this->reset(['open_crear', 'name','email','password']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }
    public function render()
    {
        $roles = Role::all();
        return view('livewire.seguridad.usuario.crear-usuario',compact('roles'));
    }
}
