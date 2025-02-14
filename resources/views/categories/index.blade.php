@extends('layouts.app')

@section('content')
    <div class="bg-cover bg-center min-h-screen p-4" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-6" style="color: #A594F9;">Llistat de Categories</h1>

            <a href="{{ route('categories.create') }}"
                class="text-white px-6 py-3 rounded-xl font-semibold transition duration-200 mb-6 inline-block"
                style="background-color: #A594F9;" onmouseover="this.style.backgroundColor='#8875E5'"
                onmouseout="this.style.backgroundColor='#A594F9'">
                Crear Nova Categoria
            </a>

            <div class="bg-white bg-opacity-90 shadow-xl rounded-xl overflow-hidden">
                <table class="min-w-full">
                    <thead style="background-color: #F5D7E0;">
                        <tr>
                            <th class="px-6 py-4 text-left font-medium" style="color: #6A5ACD;">Nom</th>
                            <th class="px-6 py-4 text-left font-medium" style="color: #6A5ACD;">Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="border-b" style="border-color: #CABBE9;">
                                <td class="px-6 py-4" style="color: #6A5ACD;">{{ $category->name }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('categories.edit', $category->id) }}"
                                        class="font-medium transition duration-200" style="color: #A594F9;"
                                        onmouseover="this.style.color='#8875E5'" onmouseout="this.style.color='#A594F9'">
                                        Editar
                                    </a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium transition duration-200"
                                            style="color: #FF6B8B;" onmouseover="this.style.color='#FF8FAB'"
                                            onmouseout="this.style.color='#FF6B8B'">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
