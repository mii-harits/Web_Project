<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEM - Daftar Resources</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

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
        }
        .content-card {
            border-radius: 15px;
        }
        footer {
            background: #ffffff;
            border-top: 1px solid #eaeaea;
            padding: 15px 0;
            margin-top: 40px;
        }
        .table thead {
            background-color: #eef0f3;
        }
        .btn-icon {
            width: 36px;
            height: 36px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
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

            <!-- TITLE + ADD DATA -->
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bold mb-0">Daftar Resources</h3>

                <!-- ADD DATA BUTTON -->
                <a href="#" class="btn btn-primary">
                    + Add Data
                </a>
            </div>

            <p class="text-muted mt-2">Berikut daftar resource yang telah diupload.</p>

            <!-- IMPORT BAR -->
            <div class="d-flex align-items-center gap-2 my-3">

                <button class="btn btn-primary">Import File (CSV/XLSX)</button>

                <div class="input-group" style="max-width: 420px;">
                    <input type="text" class="form-control" placeholder="Tempel Google Sheets URL (public)">
                    <button class="btn btn-success">Import Sheets</button>
                </div>

            </div>

            <hr>

            <!-- TABLE -->
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover align-middle">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 50px;">No</th>
                            <th>Kategori STEM</th>
                            <th>Kategori Resources</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th style="width: 80px;">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- ITEM 1 -->
                        <tr>
                            <td class="text-center">1</td>
                            <td>Science</td>
                            <td>Video</td>
                            <td>Pengantar Mikroskop</td>
                            <td>Pembelajaran STEM mengenai cara menggunakan mikroskop.</td>
                            <td><a href="#" class="text-primary">Kunjungi</a></td>
                            <td><img src="https://via.placeholder.com/60" width="60" class="rounded"></td>
                            <td class="text-center d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-warning btn-sm btn-icon">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>

                        <!-- ITEM 2 -->
                        <tr>
                            <td class="text-center">2</td>
                            <td>Technology</td>
                            <td>Article</td>
                            <td>Artificial Intelligence</td>
                            <td>Dasar-dasar pemahaman mengenai AI.</td>
                            <td><a href="#" class="text-primary">Kunjungi</a></td>
                            <td><img src="https://via.placeholder.com/60" width="60" class="rounded"></td>
                            <td class="text-center d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-warning btn-sm btn-icon">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>

                        <!-- ITEM 3 -->
                        <tr>
                            <td class="text-center">3</td>
                            <td>Engineering</td>
                            <td>Document</td>
                            <td>Dasar Robotika</td>
                            <td>File PDF pembelajaran robotika pemula.</td>
                            <td><a href="#" class="text-primary">Kunjungi</a></td>
                            <td><img src="https://via.placeholder.com/60" width="60" class="rounded"></td>
                            <td class="text-center d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-warning btn-sm btn-icon">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
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
