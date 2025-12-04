<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEM Literacy | OER Commons</title>
    <link rel="icon" type="image/png" href="https://oercommons.org/static/images/favicon.ico">

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
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
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
