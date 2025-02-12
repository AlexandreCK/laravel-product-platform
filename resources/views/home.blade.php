@extends('layouts.app')

@section('content')
    <div class="bg-cover bg-center h-screen" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white mb-4">Benvingut al Catàleg de Productes</h1>
                <p class="text-xl text-white mb-8">Descobreix la nostra àmplia gamma de productes.</p>
                <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">
                    Veure Productes
                </a>
            </div>
        </div>
    </div>
@endsection
