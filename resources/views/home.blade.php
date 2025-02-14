@extends('layouts.app')

@section('content')
    <div class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/hero.png') }}');">
        <div class="flex items-center justify-center h-full" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white mb-4">Benvingut a Catalog</h1>
                <p class="text-xl text-white mb-8">Descobreix la nostra àmplia gamma de productes.</p>
                <a href="{{ route('products.index') }}"
                    class="text-white px-6 py-3 rounded-lg font-semibold transition duration-200"
                    style="background-color: #A594F9;" onmouseover="this.style.backgroundColor='#8875E5'"
                    onmouseout="this.style.backgroundColor='#A594F9'">
                    Veure Productes
                </a>
            </div>
        </div>
    </div>
@endsection
