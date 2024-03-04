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
                Datos Alumnos
            </div>
        </x-slot>
        <x-slot name="content">
            <div class=" rounded-lg">
                <form>



                     {{-- inicio de Alerta validacion del rut --}}
                    <div id="alerta" class="flex items-center  text-white text-sm font-bold px-4 py-2 " role="alert">
                        <span id="mensaje"></span>
                    </div>
                        {{-- Fin de Alerta validacion del rut --}}

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">
                            Ingrese Rut
                        </label>
                        <input type="text" id="rut" onkeypress="return isNumber(event)" oninput="checkRut(this)"
                            class="rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            name="rut" id="rut" placeholder="Sin Punto y Guion" wire:model.defer="rut">
                        <x-input-error for="rut" />
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombres</label>
                        <input type="text" name="Tipo" id="" placeholder="Ejem:PRIMERO A" wire:model="nombres"
                            class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('nombres') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Apellido Paterno</label>
                        <input type="text" name="Tipo" id="" placeholder="Ejem:PRIMERO A" wire:model="apellido_paterno"
                            class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('apellido_paterno') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Apellido Materno</label>
                        <input type="text" name="Tipo" id="" placeholder="Ejem:PRIMERO A" wire:model="apellido_materno"
                            class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('apellido_materno') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Fecha Nacimiento</label>
                        <input type="date" name="Tipo" id="" placeholder="" wire:model="fecha_nacimiento"
                               class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('fecha_nacimiento') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Edad</label>
                        <input type="number" name="edad" id="" placeholder="Ejem:15" wire:model="edad"
                               class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('edad') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Curso</label>
                        <select type="number" name="curso_id" id="" placeholder="Ejem:15" wire:model="cursos_id"
                               class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">


                            <option value="">Selecciones</option>

                          @foreach ( $cursos as $curso )

                          <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                          @endforeach



                        </select>

                               @error('curso_id') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
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

    <script src="{{ asset('js/validar_rut.js') }}"></script>
</div>
