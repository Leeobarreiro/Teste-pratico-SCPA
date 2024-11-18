<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

// Rota inicial
Route::get('/', function () {
    return view('welcome');
});

// Grupo de rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    // Rotas de usuários (somente para administradores)
    Route::resource('usuarios', UserController::class)->middleware('can:is-admin');

    // Rotas de permissões (somente para administradores)
    Route::resource('permissions', PermissionController::class)->middleware('can:is-admin');

    // Produtos (somente para operadores)
    Route::get('/produtos', function () {
        return view('tarefas.produtos');
    })->middleware('can:is-operator')->name('produtos.index');

    // Categorias (somente para operadores)
    Route::get('/categorias', function () {
        return view('tarefas.categorias');
    })->middleware('can:is-operator')->name('categorias.index');

    // Marcas (somente para operadores)
    Route::get('/marcas', function () {
        return view('tarefas.marcas');
    })->middleware('can:is-operator')->name('marcas.index');

    // Rotas de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rota para o dashboard (somente usuários autenticados e verificados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Incluir rotas de autenticação
require __DIR__ . '/auth.php';
