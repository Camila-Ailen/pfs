<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;

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

Route::get('/', HomeController::class);

Route::controller(ProductoController::class)->group(function(){
    Route::get('productos', 'index')->name('productos.index');
    Route::get('productos/create', 'create')->name('productos.create');
    Route::get('productos/{producto}', 'show')->name('productos.show');
    Route::post('productos', 'store')->name('productos.store');
    Route::get('productos/{producto}/edit', 'edit')->name('productos.edit'); 
    Route::put('productos/{producto}', 'update')->name('productos.update');
});


/*
Route::get('productos/{producto}/{categoria?}', function ($producto, $categoria = null) {
    if ($categoria) {
    return "El producto $producto es $categoria";
    } else {
        return "El producto es $producto";
    }
});
*/