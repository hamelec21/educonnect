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
                class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 shadow-lg text-center font-bold px-3 py-2 w-full rounded-lg">
                Ingrese Nuevo Rol
            </div>
        </x-slot>
        <x-slot name="content">
            <div class=" rounded-lg">
                <form>
                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombres</label>
                        <input type="text" name="Tipo" id="" placeholder="Admin" wire:model="nombre"
                            class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('nombres') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
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



