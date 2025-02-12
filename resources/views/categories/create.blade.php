@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Crear Nova Categoria</h1>

        <form action="{{ route('categories.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nom</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Guardar Categoria
            </button>
        </form>
    </div>
@endsection
