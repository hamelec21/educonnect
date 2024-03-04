<div>
    @livewire('menu.sidebar')

    <div class="ml-auto mb-6 lg:w-[80%] xl:w-[80] 2xl:w-[85%] py-2">
        <div class="container mx-auto bg-white w-full">

            <div style="max-width:700px; margin: 30px auto;">
                <div class="flex items-center">
                    <div class="relative w-full mt-6">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="voice-search" class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600"  placeholder="Buscar Por nombre Asignatura" wire:model="search" >
                    </div>


                    <div class="mt-6">
                        @livewire('tipo-asignatura.crear-asignatura')
                    </div>

                </div>
            </div>
                        <!-- resumen-->
            <div class="">
                <div class="bg-white flex items-center justify-center  font-sans ">
                    <div class="w-full px-6">
                        <div>
                            <div>
                            </div>
                            <!-- show registros  -->
                            <div class="overflow-x-auto">
                                <div
                                    class="flex items-center justify-center  font-sans overflow-hidden">
                                    <!--ajuste del tamaño table-->
                                    <div class="w-full">
                                        <div class="bg-white shadow-md rounded my-6 ">

                                            <table class=" w-full table-auto">
                                                <thead>
                                                <tr class="text-white bg-gradient-to-r  from-green-800 to-green-400 uppercase text-sm leading-normal ">

                                                    <th class="py-3 px-6 text-left rounded-tl-lg">ID</th>
                                                    <th class="py-3 px-6 text-left">Nombre</th>
                                                    <th class="py-3 px-6 text-center rounded-tr-lg">Acciones</th>
                                                </tr>
                                                </thead>
                                                <tbody class="text-gray-600 text-sm font-light">
                                                @foreach($tipoasignaturas as $tipoasignatura)
                                                    <tr class="border-b border-gray-200 bg-gray-100">
                                                        <td class="py-3 px-6 text-center whitespace-nowrap">
                                                            <div class="flex items-center">
                                                            <span
                                                                class="font-medium uppercase">{{ $tipoasignatura->id}}</span>
                                                            </div>
                                                        </td>
                                                        <td class="py-3 px-6 text-center whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <span class="font-medium uppercase">{{$tipoasignatura->nombre}}</span>
                                                            </div>
                                                        </td>

                                                        <td class="py-3 px-6 text-center">
                                                            <div class="flex item-center justify-center">
                                                                <div class="mr-2">
                                                                    @livewire('tipo-asignatura.editar-asignatura',['tipoasignatura'=>$tipoasignatura],key($tipoasignatura->id))
                                                                </div>
                                                                <div
                                                                class=" mr-2  transform hover:text-purple-500 hover:scale-110 uppercase">
                                                                <a onclick="confirm('Estas Seguro de Eliminar A {{$tipoasignatura->nombres}}!')||event.stopImmediatePropagation()"
                                                                   wire:click="destroy({{$tipoasignatura->id}})">
                                                                    <button
                                                                        class="bg-red-600 text-white hover:bg-red-600 rounded-md px-4 py-2">
                                                                        Borrar
                                                                    </button>
                                                                </a>
                                                            </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        {{$tipoasignaturas->links()}}

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
