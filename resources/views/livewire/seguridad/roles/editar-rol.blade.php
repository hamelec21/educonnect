<div>

    <div>

        <div class="p-0 hover:scale-110">
            <button class="btn btn-editar rounded-lg px-4 py-2 text-white" wire:click="$set('open_editar', true)">
                Editar
            </button>
        </div>

        <x-dialog-modal wire:model="open_editar" maxWidth="2xl">
            <x-slot name="title">
                <div
                    class="text-white bg-gradient-to-r from-amber-500 to-amber-400 shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg">
                    Editar Status
                </div>
            </x-slot>

            <x-slot name="content">
                <div class=" rounded-lg">
                    <form>
                       <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                           <label class="px-2">Nombres</label>
                           <input type="text" name="nombre" id="nombre" placeholder="Ejem:PRIMERO A" wire:model="rol.nombre"
                               class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent uppercase">
                           @error('nombre') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                       </div>
                   </form>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-button class="ml-4" wire:click="save">
                    Guardar
                </x-button>
                <x-secondary-button class="ml-4" wire:click="$set('open_editar',false)">
                    Cancelar
                </x-secondary-button>
            </x-slot>
        </x-dialog-modal>
    </div>

</div>

