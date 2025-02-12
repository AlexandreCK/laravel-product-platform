@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Editar Producte</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nom</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Preu</label>
                <input type="number" step="0.01" name="price" id="price" value="{{ $product->price }}" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="color" class="block text-gray-700">Color</label>
                <input type="text" name="color" id="color" value="{{ $product->color }}" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label for="memory_ram" class="block text-gray-700">Memòria RAM</label>
                <input type="text" name="memory_ram" id="memory_ram" value="{{ $product->memory_ram }}" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-gray-700">Categoria</label>
                <select name="category_id" id="category_id" class="w-full px-4 py-2 border rounded-lg" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Actualitzar Producte
            </button>
        </form>
    </div>
@endsection
