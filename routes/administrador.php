<?php

use Illuminate\Support\Facades\Route;

//Rutas de carga asignaturas
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('asignaturas/show-asignaturas', \App\Http\Livewire\Asignaturas\ShowAsignaturas::class)->name('show-asignaturas');
});




//Rutas de profesores
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('profesores/show-profesores', \App\Http\Livewire\Profesores\ShowProfesores::class)->name('show-profesores');
});

//Rutas de carga horaria
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('carga-horaria/show-carga-horaria', \App\Http\Livewire\CargaHoraria\ShowCargaHoraria::class)->name('show-carga-horaria');
});




// Rutas de Semestres

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/semestres/show-semestres', \App\Http\Livewire\Semestres\ShowSemestres::class)->name('show-semestres');
});
// Rutas tipos asignaturas

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/tipo-asignatura/show-asignatura', \App\Http\Livewire\TipoAsignatura\ShowAsignatura::class)->name('show-asignatura');
});
// Rutas status

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/curso/show', \App\Http\Livewire\Curso\Show::class)->name('show-curso');
    Route::get('/statu/show', \App\Http\Livewire\Statu\Show::class)->name('show-estado');
    Route::get('/alumno/show', \App\Http\Livewire\Alumno\Show::class)->name('show-alumno');

    //rutas de modulo prestamos equipos Equipos
    Route::get('/modulo-equipos/show-prestamos', \App\Http\Livewire\ModuloEquipos\ShowPrestamos::class)->name('show-prestamos');
    //rutas de modulo devoluciones de equipos
    Route::get('/modulo-equipos/show-devoluciones', \App\Http\Livewire\ModuloEquipos\ShowDevoluciones::class)->name('show-devoluciones');
    //ruta de modulo equipos index
    Route::get('/modulo-equipos/index-equipos', \App\Http\Livewire\ModuloEquipos\IndexEquipos::class)->name('index-equipos');
});

// rutas Roles - persisos - usuarios
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/seguridad/roles/show-rol', \App\Http\Livewire\Seguridad\Roles\ShowRol::class)->name('show-rol');
    Route::get('/seguridad/permiso/show-permiso', \App\Http\Livewire\Seguridad\Permiso\ShowPermiso::class)->name('show-permiso');
    Route::get('/seguridad/usuario/show-usuario', \App\Http\Livewire\Seguridad\Usuario\ShowUsuario::class)->name('show-usuario');
});
