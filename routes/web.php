<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
 
Route::resource('clientes', ClienteController::class);

Route::resource('produtos', ProdutoController::class);

?>
