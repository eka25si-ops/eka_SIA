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
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: #ffffff; background-color: #374151; border-radius: 0.375rem; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- SIDEBAR -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3">
            <div class="d-flex align-items-center mb-4 text-white text-decoration-none">
                <span class="fs-4 fw-bold">⚡ Volt Overview</span>
            </div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="#" class="nav-link text-white-50">Dashboard</a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('pelanggan.index') }}" class="nav-link active">Pelanggan</a>
                </li>
                <li class="nav-item mt-3">
                    <a href="#" class="nav-link text-white-50">Documentation <span class="badge bg-warning text-dark ms-1">v1.4</span></a>
                </li>
            </ul>
        </nav>

        <!-- MAIN CONTENT AREA -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <!-- TOP NAVBAR -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow-sm mb-4 px-3">
                <div class="container-fluid px-0">
                    <form class="d-flex me-auto" style="max-width: 300px;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="d-flex align-items-center">
                        <span class="badge bg-danger rounded-circle p-2 me-2">🔔</span>
                        <span class="fw-bold text-dark">Bonnie Green</span>
                    </div>
                </div>
            </nav>

            <!-- KONTEN DINAMIS -->
            @yield('content')

            <!-- FOOTER -->
            <footer class="pt-4 mt-5 border-top d-flex justify-content-between align-items-center text-muted fs-7">
                <p class="mb-0">© 2019- Themesberg</p>
                <ul class="nav">
                    <li class="ms-3"><a href="#" class="text-muted text-decoration-none">About</a></li>
                    <li class="ms-3"><a href="#" class="text-muted text-decoration-none">Themes</a></li>
                    <li class="ms-3"><a href="#" class="text-muted text-decoration-none">Blog</a></li>
                    <li class="ms-3"><a href="#" class="text-muted text-decoration-none">Contact</a></li>
                </ul>
            </footer>
        </main>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
