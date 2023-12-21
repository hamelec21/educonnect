<div>
    <!--df -->
    <div class="flex h-full px-4  hover:scale-110">
        <div class="flex items-center justify-center  h-full ">
            <button class="bg-sky-500  rounded-lg px-4 py-2 text-white" wire:click="$set('open_crear', true)">
                Nuevo
            </button>
        </div>
    </div>
    <!-- df-->
    <x-dialog-modal wire:model="open_crear" maxWidth="2xl">
        <x-slot name="title">
            <div
                class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 shadow-lg text-center font-bold px-3 py-1 w-full rounded-lg">
                Crear Nuevo Usuario
            </div>
        </x-slot>
        <x-slot name="content">
           <!-- resources/views/livewire/manage-roles.blade.php -->

<div>
    <h2 class="text-center mb-5 bg-green-400 rounded-lg px-2 py-1 text-gray-700">Asignar Rol Al Usuario</h2>
    <!-- Formulario de asignación de roles -->
    <div class="container mx-auto">

        <div class="grid grid-cols-2 gap-4 justify-center">
            @foreach($roles as $role)
            <div class="flex justify-center">
                <div>
                    <input type="checkbox" wire:model="selectedRoles" value="{{ $role->name }}">
                    <label>{{ $role->name }}</label>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Formulario de creación de usuario -->
    <form wire:submit.prevent="createUser">

        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
            <label class="px-2">Nombre</label>
            <input type="text" name="Tipo" id="" placeholder="Admin" wire:model="name"
                class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            @error('name') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
            <label class="px-2">Correo/label>
            <input type="text" name="Tipo" id="" placeholder="Admin" wire:model="email"
                class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            @error('email') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
            <label class="px-2">password</label>
            <input type="password" name="password" id="" placeholder="Admin" wire:model="password"
                class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            @error('password') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
        </div>

    </form>
</div>

        </x-slot>

        <x-slot name="footer">
            <button class="ml-4 bg-sky-500 hover:scale-110 rounded-lg px-4 py-2 text-white" wire:click="save">
                Guardar
            </button>
            <x-secondary-button class="ml-4" wire:click="$set('open_crear',false)">
                Cancelar
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>


</div>


