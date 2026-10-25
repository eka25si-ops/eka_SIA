<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volt Dashboard</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; background-color: #f5f8fb; }
        .sidebar { min-height: 100vh; background-color: #1f2937; }
        .sidebar .nav-link { color: #9ca3af; padding: 0.75rem 1rem; }
        .sidebar .nav-link:hover, .sidebar .nav-item.active .nav-link { color: #ffffff; background-color: #374151; border-radius: 0.375rem; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- SIDEBAR -->
        {{-- start sidebar --}}
        @include('layouts.admin.sidebar')
        {{-- end sidebar --}}

        <!-- MAIN CONTENT AREA -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <!-- TOP NAVBAR -->
            {{-- start header --}}
            @include('layouts.admin.header')
            {{-- end header --}}

            <!-- KONTEN DINAMIS -->
            {{-- start main content --}}
            @yield('content')
            {{-- end main content --}}

            <!-- FOOTER -->
            {{-- start footer --}}
            @include('layouts.admin.footer')
            {{-- end footer --}}
        </main>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
