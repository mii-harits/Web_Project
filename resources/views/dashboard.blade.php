<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f9fafb;
        }
        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #eaeaea;
        }
        .nav-link {
            font-weight: 500;
            color: #333 !important;
        }
        .nav-link:hover {
            color: #0d6efd !important;
        }
        .content-card {
            border-radius: 15px;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg px-4 shadow-sm">
        
        <!-- Logo digeser sedikit ke kanan -->
        <a class="navbar-brand fw-bold ms-3" href="#">
            <img src="https://img.oercommons.org/40x40/oercommons/media/upload/hubs/logo-stem-v2_2.png" class="me-2">
            STEM Center
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- NAV MENU -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link me-3" href="#">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-3" href="#">Profile</a>
                </li>

                <li class="nav-item">
                    <button class="btn btn-outline-danger btn-sm">Logout</button>
                </li>

            </ul>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container mt-4">
        <div class="card shadow-sm p-4 content-card">
            <h3 class="fw-bold">Welcome Back!</h3>
            <p class="text-muted">Ini adalah halaman setelah login. Kamu dapat menambahkan konten dashboard di sini.</p>

            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 mb-3">
                        <h5 class="fw-semibold">Profile</h5>
                        <p class="text-muted">Lihat dan edit informasi akun kamu.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 mb-3">
                        <h5 class="fw-semibold">Activity</h5>
                        <p class="text-muted">Cek aktivitas terakhir kamu di website.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 mb-3">
                        <h5 class="fw-semibold">Settings</h5>
                        <p class="text-muted">Atur preferensi atau keamanan akun.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
