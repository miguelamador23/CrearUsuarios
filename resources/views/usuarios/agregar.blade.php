<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Agregar Usuarios</h1>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nombre') }}">
                @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="apellido" class="block text-gray-700 font-bold mb-2">Apellido:</label>
                <input type="text" name="apellido" id="apellido" required class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('apellido') }}">
                @error('apellido')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">E-mail:</label>
                <input type="email" name="email" id="email" required class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('email') }}">
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Contraseña:</label>
                <input type="password" name="password" id="password" required class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Guardar
            </button>
        </form>
    </div>
</body>

</html>