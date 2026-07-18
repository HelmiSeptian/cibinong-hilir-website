<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title', 'Selamat Datang di Website Desa Cibinong Hilir - Desa Sukamaju')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- TAMBAHAN FONT POPPINS (EXTRA BOLD) -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
        <!-- Custom theme CSS (navbar, masthead, timeline, dll)-->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

        <!-- TAMBAHAN CSS UNTUK MASTHEAD (POPPINS 800) -->
        <style>
            .masthead-heading,
            .masthead-subheading {
                font-family: 'Poppins', sans-serif;
                font-weight: 800;
            }
        </style>

        @stack('styles')
    </head>
    <body id="page-top">
        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')

        @yield('modals')

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- SB Forms JS -->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        @stack('scripts')
    </body>
</html>