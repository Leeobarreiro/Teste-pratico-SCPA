<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Exibir uma lista de usuários.
     */
    public function index()
    {
        // Busca todos os usuários com suas funções associadas
        $usuarios = \App\Models\User::with('role')->get();

        // Retorna a view 'usuarios.index' passando os usuários
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Mostrar o formulário para criar um novo usuário.
     */
    public function create()
    {
        // Busca apenas as funções "Administrador" e "Operador"
        $roles = \App\Models\Role::whereIn('name', ['Administrador', 'Operador'])->get();

        return view('usuarios.create', compact('roles'));
    }

    /**
     * Armazenar um novo usuário no banco de dados.
     */
    public function store(Request $request)
    {
        // Valida os dados recebidos do formulário
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        // Cria o usuário no banco de dados
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Criptografa a senha
            'role_id' => $request->role_id,
        ]);

        // Redireciona para a lista de usuários com mensagem de sucesso
        return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso!');
    }

    /**
     * Mostrar o formulário para editar um usuário específico.
     */
    public function edit($id)
    {
        $usuario = \App\Models\User::findOrFail($id);
        $roles = \App\Models\Role::whereIn('name', ['Administrador', 'Operador'])->get();

        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    /**
     * Atualizar um usuário específico no banco de dados.
     */
    public function update(Request $request, $id)
    {
        // Valida os dados recebidos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id, // Ignora o email do próprio usuário
            'role_id' => 'required|exists:roles,id',
        ]);

        // Encontra o usuário e atualiza os dados
        $usuario = \App\Models\User::findOrFail($id);
        $usuario->update($request->only('name', 'email', 'role_id'));

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remover um usuário específico do banco de dados.
     */
    public function destroy($id)
    {
        $usuario = \App\Models\User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso!');
    }
}
