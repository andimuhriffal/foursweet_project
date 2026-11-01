<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FOUR SWEET — Sweet Treats for a Sweeter Day')</title>
    <meta name="description" content="FOUR SWEET — Toko dessert online. Jelly Ball dan Sweety Potato Cheese Bread, freshly made setiap hari.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Poppins:wght@300;400;500;600;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @include('components.announcement-bar')
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <div id="fs-toast-wrap" aria-live="polite"></div>

    <a href="#" id="fs-to-top" class="fs-to-top" aria-label="Kembali ke atas">
        <i class="bi bi-arrow-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
