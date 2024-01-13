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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome.index');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::apiResource('api/clientes', ClienteController::class);
Route::post('/api/clientes', [ClienteController::class, 'store']);


Route::post('/clientes', [ClienteController::class, 'store']);

