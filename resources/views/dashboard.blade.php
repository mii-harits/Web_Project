<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEM - Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f7f8fa;
            color: #121212;
        }

        /* NAVBAR */
        .navbar {
            backdrop-filter: blur(8px);
            background: rgba(255, 255, 255, 0.85);
            border-bottom: 1px solid #e5e5e5;
        }

        /* Center navbar fully */
        .navbar .container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo left */
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 20px;
        }

        /* Center menu */
        .navbar-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            gap: 28px;
        }

        /* Hover underline */
        .nav-link {
            font-weight: 500;
            position: relative;
            padding-bottom: 6px;
            transition: 0.25s;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0%;
            height: 2px;
            background: #007bff;
            transition: 0.3s ease;
            border-radius: 5px;
        }

        .nav-link:hover::after {
            width: 100%;
        }    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 px-4 sticky-top shadow-sm">
        <div class="container-fluid position-relative">

            <!-- LEFT (LOGO) -->
            <a class="navbar-brand fw-bold" href="#">
                <img src="https://img.oercommons.org/40x40/oercommons/media/upload/hubs/logo-stem-v2_2.png" width="38">
                STEM Center
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">

                <!-- CENTER (MENU) -->
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('stem') }}">STEM</a></li>
                </ul>

                <!-- RIGHT (LOGIN/LOGOUT) -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                    </form>
                </li>
                </ul>

            </div>
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

    <!-- FOOTER -->
    <footer class="text-center">
        <p class="text-muted mb-0">© 2025 STEM Center. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
