<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// routes/web.php

// use App\Http\Controllers\ClienteController;

// Route::get('/clientes', function () {
//     return view('clientes');
// });


// Route::get('/', function () {
//     return view('welcome.index');
// });

// routes/web.php



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/clientes', function () {
//     return view('welcome.Clientes');
// });

// routes/web.php

// use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome.index');
// });

// Route::get('clientes', function () {
//     return view('clientes');
// });

// Route::apiResource('api/clientes', ClienteController::class);

//----------------------------------------------------------------------------
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome.index');
// });

// Route::get('/clientes', function () {
//     return view('clientes');
// });

// Route::apiResource('api/clientes', ClienteController::class);
// Route::post('/api/clientes', [ClienteController::class, 'store']);


// Route::post('/clientes', [ClienteController::class, 'store']);

// Route::get('/clientes/create', [ClienteController::class, 'create']);

// Route::get('/clientes/create', function () {
//     return view('clientes.create');
// });

//--------------------------------------------------------------------------------

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome.index');
// });

// Route::get('/clientes/{cliente}/edit', function () {
//     return view('clientes.edit');
// });

// // Rutas web para clientes
// Route::resource('clientes', ClienteController::class)->except(['index', 'show', 'store', 'update', 'destroy']);
// Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
// Route::get('/clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
// Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
// Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
// Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
// Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
// Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

// // Rutas API para clientes
// Route::apiResource('api/clientes', ClienteController::class)->only(['index', 'show', 'store', 'update', 'destroy']);

//-------------------------------------------------------------------------------------------

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome.index');
});

Route::get('clientes/{cliente}/edit', function () {
    return view('clientes.index');
});

// Rutas web para clientes
Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::delete('/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});

// Rutas API para clientes
Route::prefix('api/clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index']);
    Route::get('/{cliente}', [ClienteController::class, 'show']);
    Route::post('/', [ClienteController::class, 'store']);
    Route::put('/{cliente}', [ClienteController::class, 'update']);
    Route::delete('/{cliente}', [ClienteController::class, 'destroy']);
    Route::post('/api/clientes', [ClienteController::class, 'store']);

});

