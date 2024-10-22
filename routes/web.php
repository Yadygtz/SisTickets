<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

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
// Route::resource('tickets', TicketController::class)->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::view('/', 'home')->name('home');
    Route::resource('tickets', TicketController::class);
    Route::get('/getdata', [TicketController::class, 'getdata'])->name('getdata');
    Route::get('/get_tarjeta/{oficio}' , [TicketController::class, 'get_tarjeta'])->name('get_tarjeta');

     /* OBTENER EL ARCHIVO DEL SERVER FTP*/

    Route::get('tickets/veroficio/{oficio}', function ($oficio) {
        // Verificar en cuál de los dos servidores se encuentra el fichero
        $rutaCompletaFTP = "Oficios/" . $oficio . ".pdf";
        if (Storage::disk('ftp')->exists($rutaCompletaFTP)) {
            if (ob_get_level()) ob_end_clean();
            $file = Storage::disk('ftp')->get($rutaCompletaFTP);

            $response = Response::make($file, 200);
            $response->header('Content-Type', 'application/pdf');

            return $response;
        } else {
            return "Archivo no encontrado";
        }

        return $oficio;
    })->name('veroficio');


    Route::resource('users', UsuariosController::class);
});
