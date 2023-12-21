<div>
    <div>
        @livewire('menu.sidebar')
        <div class="ml-auto mb-6 lg:w-[80%] xl:w-[80] 2xl:w-[85%] py-2">

            <div class="container mx-auto bg-white w-full">

                <div style="max-width:700px; margin: 30px auto;">
                    <div class="flex items-center">
                        <div class="relative w-full mt-6">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="voice-search"
                                class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600"
                                placeholder="Buscar Por Rut" wire:model="search">
                        </div>
                    </div>
                </div>
                <!--Titulo table-->
                <div class="text-center text-gray-400 font-bold text-lg">Registro de Entrega de Equipos </div>
                <div class="">
                    <div class="bg-white flex items-center justify-center  font-sans ">
                        <div class="w-full px-6">
                            <div>
                                <div>
                                </div>
                                <!-- show registros  -->
                                <div class="overflow-x-auto">
                                    <div class="flex items-center justify-center  font-sans overflow-hidden">
                                        <!--ajuste del tamaño table-->
                                        <div class="w-full">
                                            <div class="bg-white shadow-md rounded my-6 ">

                                                <table class=" w-full table-auto">
                                                    <thead>
                                                        <tr
                                                            class="text-white bg-gradient-to-r  from-green-800 to-green-400 uppercase text-sm leading-normal ">


                                                            <th class="py-1 px-2 text-center rounded-tl-lg">N° Carros
                                                            </th>
                                                            <th class="py-1 px-2 text-center">N° Equipo</th>
                                                            <th class="py-1 px-2 text-center">Estado</th>
                                                            <th class="py-1 px-2 text-center">Rut</th>
                                                            <th class="py-1 px-2 text-center">Nombres</th>
                                                            <th class="py-1 px-2 text-center">A.paterno</th>
                                                            <th class="py-1 px-2 text-center">A.materno</th>

                                                            <th class="py-3 px-2 text-center">Fecha</th>
                                                            <th class="py-3 px-2 text-center rounded-tr-lg">Acciones
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-gray-600 text-sm font-light">
                                                        @foreach ($devoluciones as $devolver)
                                                            <tr class="border-b border-gray-200 bg-gray-100">
                                                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                                                    <div class="">
                                                                        <span
                                                                            class="font-medium uppercase">{{ $devolver->carros_id }}</span>

                                                                    </div>
                                                                </td>
                                                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                                                    <div class="">
                                                                        <span
                                                                            class="font-medium uppercase">{{ $devolver->equipo->numero_equipo }}</span>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                                                    <div class="">
                                                                        <span
                                                                            class="font-medium uppercase  bg-sky-600 text-white rounded-lg px-4">{{ $devolver->estado->nombre }}</span>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                                                    <div class="">
                                                                        <span
                                                                            class="font-medium uppercase">{{ $devolver->alumno->rut }}</span>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                                                    <div class="">
                                                                        <span
                                                                            class="font-medium uppercase">{{ $devolver->alumno->nombres }}</span>

                                                                    </div>
                                                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                                                    <div class="">
                                                                        <span
                                                                            class="font-medium uppercase justify-center">{{ $devolver->alumno->apellido_paterno }}</span>

                                                                    </div>
                                                                </td>
                                                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                                                    <div class="">
                                                                        <span
                                                                            class="font-medium uppercase">{{ $devolver->alumno->apellido_materno }}</span>

                                                                    </div>
                                                                </td>
                                                                </td>

                                                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                                                    <div class="">
                                                                        <span
                                                                            class="font-medium uppercase unded-lg px-4">{{ $devolver->created_at }}</span>
                                                                    </div>
                                                                </td>




                                                                <td class="py-3 px-2 text-center">
                                                                    <div class="flex item-center justify-center">
                                                                        <div class="mr-2">
                                                                            {{-- @livewire('alumno.editar',['ficha'=>$ficha],key($ficha->id)) --}}
                                                                        </div>
                                                                        <div
                                                                            class=" mr-2  transform hover:text-purple-500 hover:scale-110 uppercase">
                                                                            {{--  <a onclick="confirm('Estas Seguro de Eliminar A {{$ficha->nombres}}  {{$ficha->apellido_paterno}}  {{$ficha->apellido_materno}}!')||event.stopImmediatePropagation()"
                                                                       wire:click="destroy({{$ficha->id}})">
                                                                        <button
                                                                            class="bg-red-600 text-white hover:bg-red-600 rounded-md px-4 py-2">
                                                                            Borrar
                                                                        </button>
                                                                    </a>
                                                                    --}}
                                                                        </div>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{-- $prestamos->links() --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>

</div>
