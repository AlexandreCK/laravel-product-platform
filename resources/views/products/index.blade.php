@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6">Llistat de Productes</h1>

        <a href="{{ route('products.create') }}"
            class="bg-blue-500 text-white px-4 py-2 rounded-lg mb-6 inline-block hover:bg-blue-600">
            Crear Nou Producte
        </a>

        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <form action="{{ route('products.index') }}" method="GET" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div>
                        <label for="category_id" class="block text-gray-700 font-medium mb-2">Filtrar per categoria</label>
                        <select name="category_id" id="category_id"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Totes les categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="sort" class="block text-gray-700 font-medium mb-2">Ordenar per</label>
                        <select name="sort" id="sort"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Selecciona...</option>
                            <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Nom</option>
                            <option value="price" {{ request('sort') == 'price' ? 'selected' : '' }}>Preu</option>
                        </select>
                    </div>
                </div>

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Aplicar Filtres
                </button>
            </form>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preu</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Color
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Memòria
                            RAM</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Accions
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">{{ $product->name }}</td>
                            <td class="px-6 py-4">{{ $product->price }} €</td>
                            <td class="px-6 py-4">{{ $product->color }}</td>
                            <td class="px-6 py-4">{{ $product->memory_ram }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('products.show', $product->id) }}"
                                    class="text-blue-500 hover:text-blue-700">Veure</a>
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="text-green-500 hover:text-green-700">Editar</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
