@extends('layout')

@section('content')
  <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
  <p class="mb-4">{{ $post->content }}</p>
  <a href="{{ route('posts.index') }}" class="text-blue-500 hover:underline">← Kembali ke Daftar</a>
@endsection
