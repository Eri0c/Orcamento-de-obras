<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmpresaController;
use App\Models\Cliente;
use App\Http\Controllers\ClienteController;

Route::resource('clientes', ClienteController::class);


