<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEM Literacy | OER Commons</title>
    <link rel="icon" type="image/png" href="https://oercommons.org/static/images/favicon.ico">

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
        
        /* Container navbar */
        .nav-container {
            max-width: 1250px;
            margin: 0 auto;
            width: 100%;
            padding: 0 20px;
        
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        /* Logo + teks */
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 20px;
        }
        
        /* CENTER MENU */
        .navbar-nav.mx-auto {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 25px;
        }
        
        /* Menu link */
        .nav-link {
            font-weight: 500;
            position: relative;
            padding-bottom: 6px;
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
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Right side (Logout) */
        .ms-auto {
            margin-left: auto !important;
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

        /* ======== TABEL MODERN + FIX HOVER ======== */
        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
        }

        table.table {
            border-collapse: separate;
            border-spacing: 0;
        }

        .table thead th {
            background: #f0f2f5;
            text-align: center;
            vertical-align: middle !important;
            font-weight: 600;
            padding: 14px;
            border-bottom: 2px solid #dee2e6;
        }

        /* Kolom diperlebar */
        th:nth-child(2), td:nth-child(2) { width: 180px; }
        th:nth-child(3), td:nth-child(3) { width: 180px; }
        th:nth-child(4), td:nth-child(4) { width: 220px; }

        /* Hover smooth */
        .table tbody tr {
            transition: 0.2s ease;
        }

        /* Garis pembatas antar baris */
.table tbody tr {
    border-bottom: 2px solid #e5e7eb !important; /* abu-abu muda */
}


        /* Hapus efek hover border bawaan Bootstrap */
        .table-hover tbody tr:hover > * {
            --bs-table-accent-bg: transparent !important;
            box-shadow: none !important;
        }

        /* Batasi deskripsi 3 baris */
        td:nth-child(5) {
            max-width: 350px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            word-break: break-word;
            line-height: 1.4em;
            height: calc(1.4em * 3); /* exactly 3 lines height */
        }


        /* Image kecil rapi */
        td:nth-child(7) img {
            border-radius: 6px;
            object-fit: cover;
        }

        /* Pusatkan tombol actions secara sempurna */
        td:last-child {
            padding: 0 !important;
            text-align: center !important;
        }

        td:last-child .btn-icon {
            margin: auto;
            display: flex !important;
            align-items: center;
            justify-content: center;
        }

        /* Perbaikan alignment sel */
        td, th {
            vertical-align: middle !important;
        }

        /* Hilangkan highlight aneh saat hover */
        td, th {
            background-clip: padding-box !important;
        }

        /* Border lembut */
        .table-bordered > :not(caption) > * > * {
            border-color: #e2e6ea;
        }

        /* Row tampak lebih lega */
        .table td {
            padding: 14px 12px;
        }

        /* FOOTER */
        footer {
        background: #f8f9fa;
        }

        footer h6 {
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .footer-link {
            color: #555;
            text-decoration: none;
            font-size: 0.85rem;
        }
        .footer-link:hover {
            text-decoration: underline;
        }

        /* Bagian link kebijakan */
        .footer-policy {
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }

        /* FOOTER HITAM BAWAH */
        .footer-bottom-full {
            background: #3e4655;
            color: white;
            width: 100%;
            margin-top: 40px;
            padding-top: 22px;
            padding-bottom: 22px;
        }

        .footer-bottom-full img {
            filter: brightness(1);
        }

        /* Grid responsif lebih rapih */
        .footer-columns {
            row-gap: 30px;
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg py-3 sticky-top shadow-sm">
    <div class="nav-container">

        <!-- LEFT (LOGO) -->
        <a class="navbar-brand fw-bold" href="">
            <img src="https://oercommons.org/static/newdesign/images/logo-hidpi-square.png" width="38">
            STEM Center
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">

            <!-- CENTER MENU -->
            @auth
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('stem') }}">STEM</a></li>
            </ul>
            @endauth

            <!-- RIGHT -->
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

    @if (session('success'))
        <div class="alert alert-success alert-dismissable fade-show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
           <ul class="mb-0">
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
           </ul>
        </div>
    @endif

    <!-- CONTENT -->
    <div class="container mt-4">
        <div class="card shadow-sm p-4 content-card">

            <!-- TITLE + ADD DATA -->
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bold mb-0">Daftar Resources</h3>

                <!-- ADD DATA BUTTON -->
                <a href="{{ route('create') }}" class="btn btn-primary">
                    + Add Book
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
                        @foreach ($resources as $item)
                        <!-- ITEM 1 -->
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->category_stem }}</td>
                            <td>{{ $item->category_resource }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td><a href="{{ $item->link }}" class="text-primary">Kunjungi</a></td>
                            <td><img src="{{ asset('storage/resources/' . $item->image) }}" width="60"></td>
                            <td class="text-center d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-warning btn-sm btn-icon">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

<!-- Footer -->
<footer class="pt-5 border-top">

    <div class="container">

        <div class="row footer-columns">

            <!-- Discover -->
            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Discover</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">Resources</a></li>
                    <li><a class="footer-link" href="#">Collections</a></li>
                    <li><a class="footer-link" href="#">Providers</a></li>
                </ul>
            </div>

            <!-- Community -->
            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Community</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">All Hubs</a></li>
                    <li><a class="footer-link" href="#">All Groups</a></li>
                </ul>
            </div>

            <!-- Create -->
            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Create</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">Open Author</a></li>
                    <li><a class="footer-link" href="#">Submit a Resource</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Our Services</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">About Hubs</a></li>
                    <li><a class="footer-link" href="#">About OER Commons</a></li>
                    <li><a class="footer-link" href="#">OER 101</a></li>
                    <li><a class="footer-link" href="#">Help Center</a></li>
                </ul>
            </div>

            <!-- My Account -->
            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">My Account</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">My Items</a></li>
                    <li><a class="footer-link" href="#">My Groups</a></li>
                    <li><a class="footer-link" href="#">My Hubs</a></li>
                </ul>
            </div>

            <!-- Newsletter + Social -->
            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Newsletter</h6>
                <button class="btn btn-success btn-sm w-100 mb-3">Subscribe</button>

                <h6 class="text-uppercase small">Connect</h6>
                <div class="d-flex gap-2 mb-3">
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" width="28"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" width="28"></a>
                </div>

                <a href="#" class="text-danger fw-semibold small">❤️ Donate to ISKME</a>

                <div class="mt-3">
                    <small class="text-muted text-uppercase">Powered by</small><br>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Iskme-logo.png/300px-Iskme-logo.png"
                        width="90" class="mt-1">
                </div>
            </div>

        </div>

        <!-- Kebijakan -->
        <div class="footer-policy mt-4 pb-3 d-flex flex-wrap gap-3 small">
            <a href="#" class="footer-link">Privacy Policy</a>
            <a href="#" class="footer-link">Terms of Service</a>
            <a href="#" class="footer-link">Collection Policy</a>
            <a href="#" class="footer-link">DMCA</a>
        </div>

    </div>

    <!-- FOOTER BAWAH -->
    <div class="footer-bottom-full mt-4">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">

                <div class="col-md-4 mb-3 mb-md-0">
                    © 2007 - 2025, OER Commons
                </div>

                <div class="col-md-4 mb-3 mb-md-0 small">
                    <div>A project created by ISKME.</div>
                    <div>Content is licensed under Creative Commons BY-NC-SA 4.0.</div>
                </div>

                <div class="col-md-4 text-md-end">
                    <img src="https://licensebuttons.net/l/by-nc-sa/3.0/88x31.png"
                        width="90">
                </div>

            </div>
        </div>
    </div>

</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
