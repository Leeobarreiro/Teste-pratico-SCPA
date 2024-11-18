@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Permissões</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
