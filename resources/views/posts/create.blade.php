@extends('layout')

@section('content')
  <h2 class="text-xl font-semibold mb-4">Tambah Post Baru</h2>

  <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label class="block font-medium mb-1">Judul</label>
      <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
      <label class="block font-medium mb-1">Konten</label>
      <textarea name="content" rows="4" class="w-full border rounded px-3 py-2" required></textarea>
    </div>
    <div class="flex justify-between items-center mt-6">
      <a href="{{ route('posts.index') }}" class="text-gray-500 hover:underline">← Kembali</a>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </div>
  </form>
@endsection
