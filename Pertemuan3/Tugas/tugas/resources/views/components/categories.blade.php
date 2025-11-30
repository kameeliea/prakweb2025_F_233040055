<x-layout>
    <x-slot:title>Categories</x-slot:title>

    <h1 class="text-2xl font-bold mb-4">Semua Kategori</h1>

    <ul>
        @foreach ($categories as $category)
        <li class="mb-2">
            <strong>{{ $category->name }}</strong>
            <span>({{ $category->posts->count() }} posts)</span>
        </li>
        @endforeach
    </ul>
</x-layout>