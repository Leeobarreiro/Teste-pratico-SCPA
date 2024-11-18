<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        // Busca apenas as permissões 'Administrador' e 'Operador'
        $permissions = \App\Models\Permission::whereIn('name', ['Administrador', 'Operador'])->get();
    
        return view('permissions.index', compact('permissions'));
    }
    

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions',
        ]);

        Permission::create($request->all());
        return redirect()->route('permissions.index')->with('success', 'Permissão criada com sucesso!');
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update($request->all());
        return redirect()->route('permissions.index')->with('success', 'Permissão atualizada com sucesso!');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->with('success', 'Permissão excluída com sucesso!');
    }
}
