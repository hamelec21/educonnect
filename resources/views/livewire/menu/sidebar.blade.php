<div>

    <aside class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-gray-100 transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] overflow-y-auto">
        <div>

            <div class="-mx-6 px-6 py-1  flex justify-center">
                <a href="/dashboard" title="dashboard">
                    <img src="{{asset('img/logo.png')}}" class="w-16" alt="logo">
                </a>
            </div>

            <ul class="space-y-2 tracking-wide mt-10">

            </ul>
            <!--menu acedemina-->
            <ul class="space-y-2 tracking-wide mt-2">
                <li>
                    <a href="/" aria-label="dashboard" class="relative px-4 py-1 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-green-800 to-green-400">
                        <i class="fa-sharp fa-solid fa-school"></i>
                        <span class="-mr-1 font-medium">Modulos</span>
                    </a>
                </li>



                <li>
                    <a href="{{route('index-equipos')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Modulo Equipos</span>
                    </a>
                </li>


            </ul>
            <!--menu administrativo-->
            <ul class="space-y-2 tracking-wide mt-2">
                <li>
                    <a href="/" aria-label="dashboard" class="relative px-4 py-1 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r  from-green-800 to-green-400">
                        <i class="fa-solid fa-coins"></i>
                        <span class="-mr-1 font-medium">Configuraciones</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('show-curso')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Cursos</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('show-alumno')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Alumnos</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('show-estado')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Estados</span>
                    </a>
                </li>
{{--
                <li>
                    <a href="{{route('show-profesores')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Profesores</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('show-carga-horaria')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Carga Horaria</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('show-asignaturas')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Asignaturas</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('show-semestres')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Semestres</span>
                    </a>
                </li>



            </ul>

            <!--Nemu de seguridad-->

            <ul class="space-y-2 tracking-wide mt-2">
                <li>
                    <a href="/" aria-label="dashboard" class="relative px-4 py-1 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r  from-green-800 to-green-400">
                        <i class="fa-solid fa-coins"></i>
                        <span class="-mr-1 font-medium">Seguridad</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('show-rol')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Crear Rol</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('show-permiso')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Crear Permiso</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('show-usuario')}}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600">Crar Usuario</span>
                    </a>
                </li>
            </ul>

--}}
        </div>
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
                <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-red-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="group-hover:text-red-700">Logout</span>
                </button>

                <x-dropdown-link href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">

                </x-dropdown-link>

            </div>
        </form>
    </aside>
</div>

