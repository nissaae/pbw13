<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Posts</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/heroicons@2.0.16/dist/heroicons.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <nav class="bg-white shadow p-4 mb-6">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">Post Manager</h1>
    </div>
  </nav>

  <main class="container mx-auto px-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-800 rounded">
            <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 13l4 4L19 7" />
            </svg>
            <span>{{ session('success') }}</span>
            </div>
        </div>
        @endif
      @yield('content')
    </div>
  </main>
</body>
</html>
