<div>

    <div class="text-white bg-gradient-to-r from-green-800 to-green-400 h-24">

    </div>

            <div class="container mx-auto bg-gray-200 rounded-lg mt-10">
                        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4 ">
                            <label class="px-2">
                                Ingrese Rut
                            </label>
                            <input type="text" id="rut" onkeypress="return isNumber(event)" oninput="checkRut(this)"
                                class="rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                name="rut" id="rut" placeholder="Sin Punto y Guion" wire:model.defer="rut">
                            <x-input-error for="rut" />
                        </div>

                        <div id="alerta" class="flex items-center  text-white text-sm font-bold px-4 py-2 " role="alert">
                            <span id="mensaje"></span>
                        </div>
                            {{-- Fin de Alerta validacion del rut --}}

                            <div class="text-center">

                                <button class="btn-agregar px-4 py-2 rounded-lg w-1/2 mb-5 "wire:click="buscar">Solicitar</button>

                            </div>
            </div>




            <script src="{{ asset('js/validar_rut.js') }}"></script>
    </div>


