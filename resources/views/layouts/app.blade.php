<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodpanda App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-green-600 p-4">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="text-white font-bold">Foodpanda App</a>
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-white">Logout</button>
            </form>
            @endif
        </div>
    </nav>
    <main class="container mx-auto mt-8">
        @yield('content')
    </main>
</body>

</html>