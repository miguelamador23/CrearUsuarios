@extends('layouts.app')

@section('content')
<head>
    @vite('resources/css/app.css')
</head>
<div class="container mx-auto p-4">
    <h1 class="text-4xl font-bold mb-4">Usuarios</h1>
    <a href="{{ route('usuarios.agregar') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Agregar Usuario
    </a>
    <table class="w-full whitespace-nowrap table-auto mt-4">
    <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2">Apellido</th>
            <th class="px-4 py-2">E-mail</th>
            <th class="px-4 py-2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $user->nombre }}</td>
                <td class="border px-4 py-2">{{ $user->apellido }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('usuarios.edit', $user->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Editar
                    </a>
                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection