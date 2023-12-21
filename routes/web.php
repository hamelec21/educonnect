<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Rutas de Semestres
|--------------------------------------------------------------------------
|
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/semestres/show-semestres', \App\Http\Livewire\Semestres\ShowSemestres::class)->name('show-rol');
});












Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/curso/show', \App\Http\Livewire\Curso\Show::class)->name('show-curso');
    Route::get('/statu/show', \App\Http\Livewire\Statu\Show::class)->name('show-estado');
    Route::get('/alumno/show', \App\Http\Livewire\Alumno\Show::class)->name('show-alumno');

    /**rutas de modulo prestamos equipos Equipos**/

    Route::get('/modulo-equipos/show-prestamos', \App\Http\Livewire\ModuloEquipos\ShowPrestamos::class)->name('show-prestamos');
    //rutas de modulo devoluciones de equipos
    Route::get('/modulo-equipos/show-devoluciones', \App\Http\Livewire\ModuloEquipos\ShowDevoluciones::class)->name('show-devoluciones');
    //ruta de modulo equipos index
    Route::get('/modulo-equipos/index-equipos', \App\Http\Livewire\ModuloEquipos\IndexEquipos::class)->name('index-equipos');
});

/** Rutas publicas **/
Route::get('/frontend/index', \App\Http\Livewire\Frontend\Index::class)->name('index');

Route::get('/frontend/consulta', \App\Http\Livewire\Frontend\Consulta::class)->name('consulta');

//rutas para crea prestamos de los equipos

Route::get('/frontend/crear-prestamo/{rut}', \App\Http\Livewire\Frontend\CrearPrestamo::class)->name('crear-prestamo');

//rutas para crea devoluciones de los equipos

Route::get('/frontend/consulta-devolucion/', \App\Http\Livewire\Frontend\ConsultaDevolucion::class)->name('consulta-devolucion');

Route::get('/frontend/crear-devolucion/{rut}', \App\Http\Livewire\Frontend\CrearDevolucion::class)->name('crear-devolucion');
/*
|--------------------------------------------------------------------------
| Rutas Carro 1
|--------------------------------------------------------------------------
|
*/
Route::get('/frontend/carro1/index/', \App\Http\Livewire\Frontend\Carro1\Index::class)->name('carro1.index');
Route::get('/frontend/carro1/consulta/', \App\Http\Livewire\Frontend\Carro1\Consulta::class)->name('carro1.consulta');
Route::get('/frontend/carro1/consulta-devolucion/', \App\Http\Livewire\Frontend\Carro1\ConsultaDevolucion::class)->name('carro1.consulta-devolucion');
Route::get('/frontend/carro1/crear-prestamo/{rut}', \App\Http\Livewire\Frontend\Carro1\CrearPrestamo::class)->name('carro1.crear-prestamo');
Route::get('/frontend/carro1/crear-devolucion/{rut}', \App\Http\Livewire\Frontend\Carro1\CrearDevolucion::class)->name('carro1.crear-devolucion');

/*
|--------------------------------------------------------------------------
| Rutas Carro 2
|--------------------------------------------------------------------------
|
*/
Route::get('/frontend/carro2/index/', \App\Http\Livewire\Frontend\Carro2\Index::class)->name('carro2.index');
Route::get('/frontend/carro2/consulta/', \App\Http\Livewire\Frontend\Carro2\Consulta::class)->name('carro2.consulta');
Route::get('/frontend/carro2/consulta-devolucion/', \App\Http\Livewire\Frontend\Carro2\ConsultaDevolucion::class)->name('carro2.consulta-devolucion');
Route::get('/frontend/carro2/crear-prestamo/{rut}', \App\Http\Livewire\Frontend\Carro2\CrearPrestamo::class)->name('carro2.crear-prestamo');
Route::get('/frontend/carro2/crear-devolucion/{rut}', \App\Http\Livewire\Frontend\Carro2\CrearDevolucion::class)->name('carro2.crear-devolucion');

/*
|--------------------------------------------------------------------------
| Rutas Carro 3
|--------------------------------------------------------------------------
|
*/
Route::get('/frontend/carro3/index/', \App\Http\Livewire\Frontend\Carro3\Index::class)->name('carro3.index');
Route::get('/frontend/carro3/consulta/', \App\Http\Livewire\Frontend\Carro3\Consulta::class)->name('carro3.consulta');
Route::get('/frontend/carro3/consulta-devolucion/', \App\Http\Livewire\Frontend\Carro3\ConsultaDevolucion::class)->name('carro3.consulta-devolucion');
Route::get('/frontend/carro3/crear-prestamo/{rut}', \App\Http\Livewire\Frontend\Carro3\CrearPrestamo::class)->name('carro3.crear-prestamo');
Route::get('/frontend/carro3/crear-devolucion/{rut}', \App\Http\Livewire\Frontend\Carro3\CrearDevolucion::class)->name('carro3.crear-devolucion');

/*
|--------------------------------------------------------------------------
| Rutas Carro 4
|--------------------------------------------------------------------------
|
*/
Route::get('/frontend/carro4/index/', \App\Http\Livewire\Frontend\Carro4\Index::class)->name('carro4.index');
Route::get('/frontend/carro4/consulta/', \App\Http\Livewire\Frontend\Carro4\Consulta::class)->name('carro4.consulta');
Route::get('/frontend/carro4/consulta-devolucion/', \App\Http\Livewire\Frontend\Carro4\ConsultaDevolucion::class)->name('carro4.consulta-devolucion');
Route::get('/frontend/carro4/crear-prestamo/{rut}', \App\Http\Livewire\Frontend\Carro4\CrearPrestamo::class)->name('carro4.crear-prestamo');
Route::get('/frontend/carro4/crear-devolucion/{rut}', \App\Http\Livewire\Frontend\Carro4\CrearDevolucion::class)->name('carro4.crear-devolucion');


/*
|--------------------------------------------------------------------------
| rutas Roles - persisos - usuarios
|--------------------------------------------------------------------------
|
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/seguridad/roles/show-rol', \App\Http\Livewire\Seguridad\Roles\ShowRol::class)->name('show-rol');
    Route::get('/seguridad/permiso/show-permiso', \App\Http\Livewire\Seguridad\Permiso\ShowPermiso::class)->name('show-permiso');
    Route::get('/seguridad/usuario/show-usuario', \App\Http\Livewire\Seguridad\Usuario\ShowUsuario::class)->name('show-usuario');



});
