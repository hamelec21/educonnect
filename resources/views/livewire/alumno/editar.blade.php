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
                               name="rut" id="rut" placeholder="Sin Punto y Guion" readonly  wire:model.defer="ficha.rut">
                           <x-input-error for="rut" />
                       </div>

                       <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                           <label class="px-2">Nombres</label>
                           <input type="text" name="Tipo" id="" placeholder="Ejem:PRIMERO A" wire:model="ficha.nombres"
                               class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent uppercase">
                           @error('nombres') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                       </div>

                       <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                           <label class="px-2">Apellido Paterno</label>
                           <input type="text" name="Tipo" id="" placeholder="Ejem:PRIMERO A" wire:model="ficha.apellido_paterno"
                               class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent uppercase">
                           @error('apellido_paterno') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                       </div>
                       <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                           <label class="px-2">Apellido Materno</label>
                           <input type="text" name="Tipo" id="" placeholder="Ejem:PRIMERO A" wire:model="ficha.apellido_materno"
                               class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent uppercase">
                           @error('apellido_materno') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                       </div>

                       <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                           <label class="px-2">Fecha Nacimiento</label>
                           <input type="date" name="Tipo" id="" placeholder="" wire:model="ficha.fecha_nacimiento"
                                  class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent uppercase">
                           @error('fecha_nacimiento') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                       </div>

                       <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                           <label class="px-2">Edad</label>
                           <input type="number" name="edad" id="" placeholder="Ejem:15" wire:model="ficha.edad"
                                  class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent uppercase">
                           @error('edad') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                       </div>

                       <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                           <label class="px-2">Curso</label>
                           <select type="number" name="curso_id" id="" placeholder="Ejem:15" wire:model="ficha.cursos_id"
                                  class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent uppercase">


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

