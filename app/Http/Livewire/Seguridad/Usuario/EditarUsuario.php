<?php

namespace App\Http\Livewire\Seguridad\Usuario;

use App\Models\Role;
use App\Models\User;
use Hash;
use Livewire\Component;

class EditarUsuario extends Component
{
    public $open_editar = false;
    public $usuario;
    public $roles;
    public $selectedRoles = [];
    public $email;
    public $name;
    public $password;
    public $passwordConfirmation; // Nueva propiedad
    protected $rules = [
        'usuario.name' => 'required',
        'usuario.email' => 'required',
        'password' => 'nullable|min:8', // Regla para la contraseña
        'passwordConfirmation' => 'nullable|same:password', // Nueva regla para la confirmación de contraseña



        // Agrega reglas de validación adicionales según sea necesario
    ];

    public function mount(User $usuario)
    {
        $this->usuario = $usuario;

        if (!$this->roles) {
            $this->roles = Role::all();
        }

        if (empty($this->selectedRoles)) {
            $this->selectedRoles = $usuario->roles->pluck('id')->toArray();
        }
    }

    public function save()
    {
        $this->validate();
        // Actualiza el usuario usando Eloquent

       // Actualiza el usuario usando Eloquent
       $data = [
        'name' => $this->usuario->name,
        'email' => $this->usuario->email,
    ];

    if ($this->password) {
        $data['password'] = bcrypt($this->password);
    }

    $this->usuario->update($data);

        // Sincroniza los roles
        $this->usuario->roles()->sync($this->selectedRoles);

        $this->reset(['open_editar', 'name']);

        $this->emit('render');
        $this->emit('editar'); //mensaje
    }

    public function render()
    {
        // Solo carga los usuarios y roles si aún no se han cargado
        $usuarios = $this->usuarios ?? User::all();
        $roles = $this->roles ?? Role::all();

        return view('livewire.seguridad.usuario.editar-usuario', compact('usuarios', 'roles'));
    }
}
