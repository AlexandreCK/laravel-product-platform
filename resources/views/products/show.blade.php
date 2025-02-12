@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Detall del Producte</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            <p><strong>Nom:</strong> {{ $product->name }}</p>
            <p><strong>Preu:</strong> {{ $product->price }} €</p>
            <p><strong>Color:</strong> {{ $product->color }}</p>
            <p><strong>Memòria RAM:</strong> {{ $product->memory_ram }}</p>
            <p><strong>Categoria:</strong> {{ $product->category->name }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4">Afegir una valoració</h2>
            <form action="{{ route('ratings.store', $product->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
                @csrf
                <div class="mb-4">
                    <label for="comment" class="block text-gray-700">Comentari</label>
                    <textarea name="comment" id="comment" class="w-full px-4 py-2 border rounded-lg" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="score" class="block text-gray-700">Puntuació (0-5)</label>
                    <input type="number" name="score" id="score" min="0" max="5"
                        class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Enviar valoració</button>
            </form>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4">Valoracions</h2>
            @foreach ($product->ratings as $rating)
                <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                    <p><strong>Puntuació:</strong> {{ $rating->score }}/5</p>
                    <p><strong>Comentari:</strong> {{ $rating->comment }}</p>
                </div>
            @endforeach
        </div>

        <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg mt-4 inline-block">
            Tornar al Llistat
        </a>
    </div>
@endsection
