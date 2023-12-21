<div>


    <div>
        <!--header-->
        <div class="text-white bg-gray-900">

            <div class="flex justify-center py-4 space-x-7">
                <div>{{ $this->query->nombres }} {{ $this->query->apellido_paterno }} {{ $this->query->apellido_materno }}
                </div>
                <div>{{ $this->query->cursos_id }}</div>
            </div>
        </div>
    </div>


    <div class="text-2xl text-center mt-10 uppercase">Carro N° 4</div>


    <div class="w-2/3 px-2 py-1 mx-auto max-w-7x sm:px-6 lg:px-8 ">

        {{--print_r($selected)--}}

            {{--$prestamos--}}

            <table class="w-full divide-y divide-gray-200  mt-10">
                <div class="flex justify-center mt-10">
                    <button class="btn-entrega uppercase" wire:click="devolver">devolver</button>
                </div>
                <thead class="bg-gray-900">

                    <tr>
                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-center text-gray-200 uppercase cursor-pointer">

                        </th>
                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-center text-gray-200 uppercase cursor-pointer">
                            N° Notebook
                        </th>

                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-center text-gray-200 uppercase cursor-pointer">
                            Estado
                    </tr>
                </thead>


                    <tbody class="bg-white divide-y divide-gray-200">


                        @foreach ($prestamos as $item)
                        <tr>

                            <td class="px-3 py-2 text-center whitespace-nowrap">
                                <input type="checkbox" wire:model="selected" value="{{ $item->equipos_id}}" {{ $item->status_id == 1 ? 'disabled' : '' }}>
                                @error('selected') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror

                             </td>

                            <td class="px-3 py-2 text-center whitespace-nowrap">
                                {{ $item->numero_equipo }}



                            </td>



                            <td class="px-3 py-4 text-center whitespace-nowrap">

                                @if ($item->status_id == 2)
                                <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-red-900">
                                    <span aria-hidden
                                        class="absolute inset-0 bg-red-600 rounded-full shadow-xl opacity-50"></span>
                                    <span class="relative">Solicitado</span>
                                </span>
                                @else


                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900 ">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-500 rounded-full shadow-xl opacity-50"></span>
                                        <span class="relative">Entregado</span>
                                    </span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
    </div>
</div>


