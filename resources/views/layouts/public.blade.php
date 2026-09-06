<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DEN RAWIT - Orkestrator Inovasi Ekosistem Pertanian Cabai Regeneratif')</title>
    
    <!-- Google Fonts (Softer & Rounded) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-denrawit-beige text-gray-900 font-sans antialiased overflow-x-hidden selection:bg-denrawit-yellow selection:text-gray-900">
    
    @include('public.sections.header')

    <main>
        @yield('content')
    </main>

    @include('public.sections.footer')

    <!-- Alpine.js (for simple interactions like mobile menu) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
