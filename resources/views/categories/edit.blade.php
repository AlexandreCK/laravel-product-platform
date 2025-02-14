@extends('layouts.app')

@section('content')
    <div class="bg-cover bg-center min-h-screen flex items-center justify-center"
        style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="w-full max-w-md mx-4">
            <div class="bg-white bg-opacity-90 shadow-xl rounded-xl p-8">
                <h1 class="text-3xl font-bold mb-8 text-center" style="color: #A594F9;">Editar Categoria</h1>

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="name" class="block font-medium mb-2" style="color: #6A5ACD;">Nom</label>
                        <input type="text" name="name" id="name" value="{{ $category->name }}"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-#A594F9 focus:border-#A594F9 transition duration-200"
                            style="border-color: #CABBE9;" required>
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit"
                            class="w-full text-white px-6 py-3 rounded-xl font-semibold transition duration-200"
                            style="background-color: #A594F9;" onmouseover="this.style.backgroundColor='#8875E5'"
                            onmouseout="this.style.backgroundColor='#A594F9'">
                            Actualitzar Categoria
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
