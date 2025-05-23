<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    {{-- Tailwind CSS & Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Favicon dan Meta --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="description" content="@yield('meta_description', 'Aplikasi Laravel')">

    <style>
        html, body {
            height: 100%;
        }

        @import url('https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap');
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans min-h-screen">
    <div class="flex min-h-screen flex-col md:flex-row">
        {{-- Menu Navigasi --}}
        <aside class="w-full md:w-64 bg-white shadow-md h-screen">
            @include('components.sidebar')
        </aside>

        {{-- Konten Utama --}}
        <main class="flex-1 bg-gray-100 p-6 overflow-auto">
            <div class="bg-white shadow-md rounded-lg p-6 h-full">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
