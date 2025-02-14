@extends('layouts.app')

@section('content')
    <div class="bg-cover bg-center min-h-screen p-4" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-8 text-center" style="color: #A594F9;" style="color: #A594F9;">Explora el Detall del Producte</h1>

            <div class="bg-white bg-opacity-90 shadow-xl rounded-xl p-8 mb-8" style="border-color: #CABBE9;">
                <h2 class="text-2xl font-semibold mb-4" style="color: #6A5ACD;">Informació del Producte</h2>
                <p class="text-lg"><strong>Nom:</strong> {{ $product->name }}</p>
                <p class="text-lg"><strong>Preu:</strong> {{ $product->price }} €</p>
                <p class="text-lg"><strong>Color:</strong> {{ $product->color }}</p>
                <p class="text-lg"><strong>Memòria RAM:</strong> {{ $product->memory_ram }}</p>
                <p class="text-lg"><strong>Categoria:</strong> {{ $product->category->name }}</p>
            </div>

            <div class="bg-white bg-opacity-90 shadow-xl rounded-xl p-8 mb-8" style="border-color: #CABBE9;">
                <h2 class="text-2xl font-semibold mb-4" style="color: #A594F9;">Afegeix la teva Valoració</h2>
                <form action="{{ route('ratings.store', $product->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="comment" class="block font-medium mb-2" style="color: #6A5ACD;">Comentari</label>
                        <textarea name="comment" id="comment"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-#A594F9 transition duration-200"
                            style="border-color: #CABBE9;" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="score" class="block font-medium mb-2" style="color: #6A5ACD;">Puntuació (0-5)</label>
                        <input type="number" name="score" id="score" min="0" max="5"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-#A594F9 transition duration-200"
                            style="border-color: #CABBE9;" required>
                    </div>
                    <button type="submit" class="text-white px-6 py-3 rounded-xl font-semibold transition duration-200"
                        style="background-color: #A594F9;" onmouseover="this.style.backgroundColor='#8875E5'"
                        onmouseout="this.style.backgroundColor='#A594F9'">
                        Envia la teva Valoració
                    </button>
                </form>
            </div>

            <div class="bg-white bg-opacity-90 shadow-xl rounded-xl p-8 mb-8" style="border-color: #CABBE9;">
                <h2 class="text-2xl font-semibold mb-4" style="color: #A594F9;">Valoracions dels Clients</h2>
                @foreach ($product->ratings as $rating)
                    <div class="mb-6">
                        <p class="text-lg"><strong>Puntuació:</strong> {{ $rating->score }}/5</p>
                        <p class="text-lg"><strong>Comentari:</strong> {{ $rating->comment }}</p>
                    </div>
                @endforeach
            </div>

            <a href="{{ route('products.index') }}"
                class="text-white px-6 py-3 rounded-xl font-semibold transition duration-200 inline-block"
                style="background-color: #A594F9;" onmouseover="this.style.backgroundColor='#8875E5'"
                onmouseout="this.style.backgroundColor='#A594F9'">
                Torna al Llistat de Productes
            </a>
        </div>
    </div>
@endsection
