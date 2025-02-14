<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-pink-100">
    <div class="flex">
        <nav class="bg-indigo-300 shadow-lg w-64 h-screen">
            <div class="px-6 py-4 flex flex-col items-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-6 rounded-full">
                </a>
                <a href="{{ url('/') }}"
                    class="text-2xl font-bold text-pink-200 transition duration-200 py-2 px-4 rounded-lg hover:bg-gray-700">Catalog</a>
                <div class="mt-6 space-y-4 flex flex-col items-center">
                    <a href="{{ route('products.index') }}"
                        class="text-pink-200 font-medium transition duration-200 py-2 px-4 rounded-lg hover:bg-gray-700">Productes</a>
                    <a href="{{ route('categories.index') }}"
                        class="text-pink-200 font-medium transition duration-200 py-2 px-4 rounded-lg hover:bg-gray-700">Categories</a>

                    @auth
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"
                                class="bg-pink-400 text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-pink-500">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-pink-200 font-medium transition duration-200 py-2 px-4 rounded-lg hover:bg-gray-700">Login</a>
                        <a href="{{ route('register') }}"
                            class="text-pink-200 font-medium transition duration-200 py-2 px-4 rounded-lg hover:bg-gray-700">Register</a>
                    @endauth
                </div>
            </div>
        </nav>

        <div class="flex-1 p-4">
            @yield('content')
        </div>
    </div>
</body>

</html>
