@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6" style="color: #A594F9;">Crear Nova Categoria</h1>

        <form action="{{ route('categories.store') }}" method="POST"
            style="background-color: #F8E9EC; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border-radius: 1rem; padding: 2rem;">
            @csrf

            <div class="mb-6">
                <label for="name" class="block font-medium mb-2" style="color: #6A5ACD;">Nom</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-#A594F9 focus:border-#A594F9 transition duration-200"
                    style="border-color: #CABBE9;" required>
            </div>

            <button type="submit" class="text-white px-6 py-3 rounded-xl font-semibold transition duration-200"
                style="background-color: #A594F9;" onmouseover="this.style.backgroundColor='#8875E5'"
                onmouseout="this.style.backgroundColor='#A594F9'">
                Guardar Categoria
            </button>
        </form>
    </div>
@endsection
