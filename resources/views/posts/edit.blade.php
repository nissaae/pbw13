@extends('layout')

@section('content')
  <h2 class="text-xl font-semibold mb-4">Edit Post</h2>

  <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
      <label class="block font-medium mb-1">Judul</label>
      <input type="text" name="title" value="{{ $post->title }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
      <label class="block font-medium mb-1">Konten</label>
      <textarea name="content" rows="4" class="w-full border rounded px-3 py-2" required>{{ $post->content }}</textarea>
    </div>
    <div class="flex justify-between items-center mt-6">
      <a href="{{ route('posts.index') }}" class="text-gray-500 hover:underline">← Kembali</a>
      <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
    </div>
  </form>
@endsection
