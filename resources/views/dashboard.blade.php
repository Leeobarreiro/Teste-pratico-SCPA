@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Bem-vindo, {{ auth()->user()->name }}!</h1>

    @if(auth()->user()->role->name === 'Administrador')
        <div class="row">
            <h2 class="mb-4 text-primary text-center">Área do Administrador</h2>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-primary">
                    <div class="card-body text-center">
                        <i class="fas fa-users display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Gerenciar Usuários</h5>
                        <p class="card-text">Visualize, edite e exclua usuários do sistema.</p>
                        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-success">
                    <div class="card-body text-center">
                        <i class="fas fa-key display-4 text-success"></i>
                        <h5 class="card-title mt-3">Verificar Permissões</h5>
                        <p class="card-text">Verifique as permissões de acesso.</p>
                        <a href="{{ route('permissions.index') }}" class="btn btn-success">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
    @elseif(auth()->user()->role->name === 'Operador')
        <div class="row">
            <h2 class="mb-4 text-info text-center">Área do Operador</h2>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-info">
                    <div class="card-body text-center">
                        <i class="fas fa-box-open display-4 text-info"></i>
                        <h5 class="card-title mt-3">Gerenciar Produtos</h5>
                        <p class="card-text">Visualize e gerencie os produtos do sistema.</p>
                        <a href="{{ route('produtos.index') }}" class="btn btn-info">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-warning">
                    <div class="card-body text-center">
                        <i class="fas fa-tags display-4 text-warning"></i>
                        <h5 class="card-title mt-3">Gerenciar Categorias</h5>
                        <p class="card-text">Visualize e gerencie as categorias.</p>
                        <a href="{{ route('categorias.index') }}" class="btn btn-warning">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-danger">
                    <div class="card-body text-center">
                        <i class="fas fa-trademark display-4 text-danger"></i>
                        <h5 class="card-title mt-3">Gerenciar Marcas</h5>
                        <p class="card-text">Visualize e gerencie as marcas do sistema.</p>
                        <a href="{{ route('marcas.index') }}" class="btn btn-danger">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <h2 class="text-center text-danger">Sem Permissões!</h2>
        <p class="text-center">Entre em contato com o administrador do sistema.</p>
    @endif
</div>
@endsection
