<div>

    @livewire('menu.sidebar')
    <div class="ml-auto mb-6 lg:w-[80%] xl:w-[80] 2xl:w-[85%] py-2">
        <div class="text-center text-lg font-bold mt-10 uppercase"></div>
        <div class="container mx-auto px-4">
            <div class="px-4 py-2 rounded-md text-white bg-gradient-to-r from-green-800 to-green-400 text-center">Panel de Administracion</div>
        </div>

        <div class="container mx-auto mt-5">
            <div class="flex space-x-5 justify-center px-4">
                <a href="{{route('show-prestamos')}}">
                    <button class="bg-sky-600 text-white uppercase mt-5 rounded-lg px-4 py-1 text-center">Historiales de prestamos</button>
                </a>

                <a href="{{route('show-devoluciones')}}">
                <button class="bg-amber-500 text-white uppercase mt-5 rounded-lg px-4 py-1 text-center">Historiales de Devoluciónes</button>
                </a>


                    <div class="bg-cyan-800 text-white uppercase mt-5 rounded-lg px-4 py-1 text-center"> Total Equipos {{count($total_equipos)}}</div>

            </div>


        </div>

        <div class="container px-4 mt-10 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class=" bg-gray-300 rounded-lg shadow-lg px-4">
                    <div class=" text-gray-600 text-center  text-lg mt-2">Carro N°1</div>
                    <div class="flex justify-center text-center mt-3 ">
                        <div class="rounded bg-sky-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_equipo)}}</div>
                            <div class="text-md">Total de Equipos</div>
                        </div>
                    </div>

                    <div class="flex justify-center text-center mt-3">
                        <div class="rounded bg-red-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_prestado)}}</div>
                            <div class="text-md">Equipos Prestados</div>
                        </div>
                    </div>
                    <div class="flex justify-center text-center mt-3 mb-5">
                        <div class="rounded bg-green-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_disponible)}}</div>
                            <div class="text-md">Equipos Disponibles</div>
                        </div>
                    </div>
                </div>
                <!--carro 2-->
                <div class=" bg-gray-300 rounded-lg shadow-lg px-4">
                    <div class=" text-gray-600 text-center  text-lg mt-2">Carro N°2</div>
                    <div class="flex justify-center text-center mt-3 ">
                        <div class="rounded bg-sky-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_equipoc2)}}</div>
                            <div class="text-md">Total de Equipos</div>
                        </div>
                    </div>

                    <div class="flex justify-center text-center mt-3">
                        <div class="rounded bg-red-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_prestadoc2)}}</div>
                            <div class="text-md">Equipos Prestados</div>
                        </div>
                    </div>
                    <div class="flex justify-center text-center mt-3 mb-5">
                        <div class="rounded bg-green-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_disponiblec2)}}</div>
                            <div class="text-md">Equipos Disponibles</div>
                        </div>
                    </div>
                </div>
                 <!--carro 3-->
                 <div class=" bg-gray-300 rounded-lg shadow-lg px-4">
                    <div class=" text-gray-600 text-center  text-lg mt-2">Carro N°3</div>
                    <div class="flex justify-center text-center mt-3 ">
                        <div class="rounded bg-sky-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_equipoc3)}}</div>
                            <div class="text-md">Total de Equipos</div>
                        </div>
                    </div>

                    <div class="flex justify-center text-center mt-3">
                        <div class="rounded bg-red-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_prestadoc3)}}</div>
                            <div class="text-md">Equipos Prestados</div>
                        </div>
                    </div>
                    <div class="flex justify-center text-center mt-3 mb-5">
                        <div class="rounded bg-green-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_disponiblec3)}}</div>
                            <div class="text-md">Equipos Disponibles</div>
                        </div>
                    </div>
                </div>

                 <!--carro 4-->
                 <div class=" bg-gray-300 rounded-lg shadow-lg px-4">
                    <div class=" text-gray-600 text-center  text-lg mt-2">Carro N°4</div>
                    <div class="flex justify-center text-center mt-3 ">
                        <div class="rounded bg-sky-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_equipoc4)}}</div>
                            <div class="text-md">Total de Equipos</div>
                        </div>
                    </div>

                    <div class="flex justify-center text-center mt-3">
                        <div class="rounded bg-red-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_prestadoc4)}}</div>
                            <div class="text-md">Equipos Prestados</div>
                        </div>
                    </div>
                    <div class="flex justify-center text-center mt-3 mb-5">
                        <div class="rounded bg-green-600 px-2 text-white py-2 w-44">
                            <div class="text-md">{{count($total_disponiblec4)}}</div>
                            <div class="text-md">Equipos Disponibles</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    </div>

</div>
