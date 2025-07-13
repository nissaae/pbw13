@extends('layout')

@section('content')
  <div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold text-black-600">Daftar Post</h1>
    <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded inline-flex items-center gap-2 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 4v16m8-8H4"/>
    </svg>
    Tambah Post
    </a>
  </div>

  <table class="table-auto w-full border border-gray-200 rounded overflow-hidden shadow-sm">
    <thead class="bg-gray-100">
      <tr>
        <th class="px-4 py-2 text-left">Judul</th>
        <th class="px-4 py-2 text-center w-48">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr class="border-t">
        <td class="px-4 py-2">{{ $post->title }}</td>
        <td class="px-4 py-2 text-center space-x-2">
          <a href="{{ route('posts.show', $post->id) }}"
             class="text-blue-500 hover:text-blue-700 underline">Detail</a>
          <a href="{{ route('posts.edit', $post->id) }}"
             class="text-yellow-500 hover:text-yellow-600 underline">Edit</a>
          <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit"
                    onclick="return confirm('Yakin ingin hapus post ini?')"
                    class="text-red-500 hover:text-red-600 underline">
              Hapus
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
