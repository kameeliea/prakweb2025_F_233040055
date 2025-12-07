@extends('dashboard.layout')

@section('content')
<h2 class="text-2xl font-semibold mb-4">Create Category</h2>

{{-- Form Create Category --}}
<form action="/dashboard/categories" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="font-medium">Nama Category</label>
        <input type="text" name="name"
            class="w-full p-2 border rounded mt-1" placeholder="Masukkan nama kategori">

        {{-- Validasi --}}
        @error('name')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Save
    </button>
</form>
@endsection