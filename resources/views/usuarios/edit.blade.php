@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h3 class="mb-0">Editar Usuário</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}" placeholder="Digite o nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" placeholder="Digite o email" required>
                </div>
                <div class="mb-3">
                    <label for="role_id" class="form-label">Função</label>
                    <select class="form-select" id="role_id" name="role_id" required>
                        <option value="" disabled>Selecione a função</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $role->id == $usuario->role_id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-warning me-2">Atualizar</button>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
