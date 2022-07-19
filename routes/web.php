<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\EventoController;
use Illuminate\Database\Eloquent\Model;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/header', function () {
    return view('general.header');
});

Route::get('/footer', function () {
    return view('general.footer');
});

Route::get('/index', function () {
    return view('principal.index');
});
Route::get('/admin', function () {
    return view('admin.indexAdmin');
});

Route::get('/horas', function () {
    return view('agenda.gestionHoras');
});


Route::get('/prueba1', function () {
    return view('tienda.editar');
});


 Route::get('/carrito', function () {
   return view('tienda.carrito');
});

 Route::get('/contacto', function () {
      return view('principal.contacto');
 });

 Route::get('/salon', function () {
    return view('principal.salon');
});

Route::get('/servicios', function () {
    return view('servicio.index');
});
Route::get('/aprende', function () {
   return view('principal.aprende');
});

Route::get('/reserva', function () {
    return view('principal.reserva');
 });

 Route::get('/carro', function () {
    return view('tienda.carrito');
 });







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/agendamiento', [App\Http\Controllers\EventoController::class, 'index']);
Route::post('/agendamiento/agregar', [App\Http\Controllers\EventoController::class, 'store']);

//Productos
Route::prefix('productos')->group(function(){
Route::get('/',[ ProductosController::class, 'index' ])->name('tienda.productos');
Route::get('/crear',[ ProductosController::class, 'create' ])->name('tienda.crear');
Route::post('/crear',[ ProductosController::class, 'store' ])->name('tienda.store');
Route::get('/{id}',[ ProductosController::class, 'show' ])->name('tienda.show');
Route::get('/editar/{id}',[ ProductosController::class, 'edit' ])->name('tienda.editar');
Route::put('/{productos}',[ ProductosController::class, 'update' ])->name('tienda.actualizar');
Route::delete('/{productos}',[ ProductosController::class, 'destroy' ])->name('tienda.eliminar');

Route::get('/descripcion/{productos}',[ ProductosController::class, 'show' ])->name('tienda.show');





});

Route::get('/tienda',[ TiendaController::class, 'index' ])->name('tienda.index');

//Agenda
Route::prefix('agenda')->group(function(){

    Route::get('/',[ AgendaController::class, 'index' ])->name('agenda.index');
    Route::get('/crear',[ AgendaController::class, 'create' ])->name('agenda.crear');
    Route::post('/crear',[ AgendaController::class, 'store' ])->name('agenda.store');
    Route::get('/editar/{id}',[ AgendaController::class, 'edit' ])->name('agenda.editar');
    Route::put('/editar/{agenda}',[ AgendaController::class, 'update' ])->name('agenda.actualizar');
    Route::delete('/editar/{agenda}',[ AgendaController::class, 'destroy' ])->name('agenda.eliminar');
    Route::get('/reserva',[ AgendaController::class, 'mostrar' ])->name('agenda.cliente');

    Route::post('/reserva/crear',[ AgendaController::class, 'store1' ])->name('agenda.reservacrear');
    Route::get('/mostrar',[ AgendaController::class, 'show' ])->name('agenda.show');

});

/*Route::prefix('evento')->group(function(){

    Route::get('/',[ EventoController::class, 'index' ])->name('evento.index');
    Route::get('/crear',[ EventoController::class, 'create' ])->name('evento.crear');
    Route::post('/crear',[ EventoController::class, 'store' ])->name('evento.store');
    Route::get('/editar/{id}',[ EventoController::class, 'edit' ])->name('evento.editar');
    Route::put('/editar/{agenda}',[ EventoController::class, 'update' ])->name('evento.actualizar');
    Route::delete('/editar/{agenda}',[ EventoController::class, 'destroy' ])->name('evento.eliminar');
    Route::get('/reserva',[ EventoController::class, 'mostrar' ])->name('evento.cliente');

    Route::post('/reserva/crear',[ EventoController::class, 'store1' ])->name('evento.reservacrear');
    Route::get('/mostrar',[ EventoController::class, 'show' ])->name('evento.show');

});
*/
//Servicio
Route::prefix('servicio')->group(function(){

    Route::get('/',[ ServiciosController::class, 'index' ])->name('servicio.index');
    Route::get('/crear',[ ServiciosController::class, 'create' ])->name('servicio.crear');
    Route::post('/crear',[ ServiciosController::class, 'store' ])->name('servicio.store');
    Route::get('/editar/{id}',[ ServiciosController::class, 'edit' ])->name('servicio.editar');
    Route::put('/editar/{servicios}',[ ServiciosController::class, 'update' ])->name('servicio.actualizar');
    Route::delete('/editar/{servicios}',[ ServiciosController::class, 'destroy' ])->name('servicio.eliminar');



});

 //Route::prefix('mrchavez')->group(function(){

   // Route::get('/',[PrincipalController::class, 'index' ])->name('principal.index');
    //Route::get('/aprende',[PrincipalController::class, 'aprende' ])->name('principal.aprende');
    //Route::get('/contacto',[PrincipalController::class, 'contacto' ])->name('principal.contacto');
    //Route::get('/salon',[PrincipalController::class, 'salon' ])->name('principal.salon');







//});


//Route::get('/agenda',[ AgendaController::class, 'index' ])->name('agenda.index');




// Route::resource('/productos', ProductoController::class);
// Route::get('productos', function(){
//     return view('tienda.productos');

// });

// Route::get('/tienda', [ProductoController::class, 'index'])->name('tienda') ;


// Route::controller(ProductoController::class)->group(function(){

//     Route::get('/tienda','index');


// });


Auth::routes();

