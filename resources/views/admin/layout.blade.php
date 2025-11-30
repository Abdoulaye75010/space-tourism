<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg p-5 flex flex-col">
            <h2 class="text-2xl font-bold mb-8 text-blue-700">Admin Panel</h2>

            <nav class="flex-1">
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="block px-3 py-2 rounded hover:bg-blue-100 
                                   {{ request()->routeIs('admin.dashboard') ? 'bg-blue-200 font-bold' : '' }}">
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.planets.index') }}"
                            class="block px-3 py-2 rounded hover:bg-blue-100
                                   {{ request()->routeIs('admin.planets.*') ? 'bg-blue-200 font-bold' : '' }}">
                            Planètes
                        </a>
                    </li>
                </ul>
            </nav>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full bg-red-500 text-white py-2 rounded hover:bg-red-600">
                    Déconnexion
                </button>
            </form>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10 overflow-y-auto">
            <h1 class="text-3xl font-bold mb-6">@yield('title')</h1>

            @yield('content')
        </main>

    </div>

</body>
</html>