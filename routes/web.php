<?php

use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/produtos', [ClientesController::class, 'produtos']);
Route::get('/template_admin', [ClientesController::class, 'templateAdmin']);


/*Route::prefix('/carros')->group(function(){

    Route::get('/', [CarrosController::class, 'index'])->name('carros.index');
    Route::get('/cadastrar', [CarrosController::class, 'cadastrarCarro'])->name('carros.cadastrar');
    Route::get('/{id}', [CarrosController::class, 'buscarCarro'])->name('carro.buscar');
    Route::post('/', [CarrosController::class, 'salvarCarro'])->name('carros.novo');
    Route::post('/alterar', [CarrosController::class, 'alterarCarro'])->name('carro.alterar');
    Route::get('/apagar/{id}', [CarrosController::class, 'apagarCarro'])->name('carro.apagar');
});*/

Route::prefix('/clientes')->group(function(){

    Route::get('/', [ClientesController::class, 'index']);
    Route::get('/clientes_cadastro', [ClientesController::class, 'clientesCadastro'])->name('cliente');
    Route::post('/clientes_cadastro', [ClientesController::class, 'recebeDados'])->name('cliente.novo');
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
    Route::post('/alterar', [ClientesController::class, 'alterarCliente'])->name('clientes.alterar');
    Route::get('/{id}', [ClientesController::class, 'buscarCliente'])->name('cliente.buscar');
    Route::get('/excluir/{id}', [ClientesController::class, 'excluirCliente'])->name('cliente.excluir');
});

Route::get('/', function() {
        return view('carrosTrabalho.index');
    })->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
