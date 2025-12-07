<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    {{-- Tailwind + Flowbite CDN biar tidak polos --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body class="bg-gray-100">

    {{-- NAVBAR --}}
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Dashboard</h1>

        <div class="space-x-4">
            <a href="/dashboard/posts" class="text-blue-600 font-semibold">Posts</a>
            <a href="/dashboard/categories" class="text-blue-600 font-semibold">Categories</a>

            <form action="/logout" method="POST" class="inline">
                @csrf
                <button class="bg-red-500 text-white px-3 py-1 rounded">Logout</button>
            </form>
        </div>
    </nav>

    {{-- CONTENT --}}
    <div class="max-w-4xl mx-auto mt-8 bg-white p-6 rounded shadow">
        @yield('content')
    </div>

</body>

</html>