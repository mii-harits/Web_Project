<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRE STEAM</title>
    {{-- <link rel="icon" type="image/png" href="https://oercommons.org/static/images/favicon.ico"> --}}

    <!-- Bootstrap -->
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

        /* HERO SECTION */
        .hero {
            padding: 110px 0 120px 0;
            text-align: center;
            background: linear-gradient(to bottom, #ffffff 0%, #f7f8fa 100%);
            margin-bottom: 90px;
            box-shadow: 0 25px 45px -20px rgba(0,0,0,0.12);
            border-bottom-left-radius: 18px;
            border-bottom-right-radius: 18px;
        }

        .hero-title {
            font-size: 42px;
            font-weight: 700;
            color: #111;
        }

        .hero-subtitle {
            max-width: 750px;
            margin: auto;
            font-size: 17px;
            color: #6d6d6d;
        }

        /* RESOURCE CARD */
        .resource-card {
            border-radius: 20px;
            overflow: hidden;
            border: none;
            background: #fff;
            box-shadow: 0 6px 28px rgba(0,0,0,0.06);
            transition: 0.3s ease;
            text-align: center;
        }

        .resource-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 36px rgba(0,0,0,0.08);
        }

        .resource-img {
            height: 180px;
            width: 100%;
            object-fit: cover;
            filter: brightness(88%);
        }

        .resource-title {
            font-size: 18px;
            font-weight: 600;
            color: #111;
        }

        .resource-count {
            font-size: 14px;
            color: #6c757d;
        }

        .section-header {
            margin-bottom: 50px;
            text-align: center;
        }

        .section-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: #111;
        }

        .section-header p {
            color: #6c757d;
            max-width: 650px;
            margin: auto;
        }

        /* MODERN DIVIDER */
        .divider {
            height: 2px;
            width: 80%;
            margin: 90px auto;
            background: linear-gradient(
                90deg,
                rgba(0, 123, 255, 0) 0%,
                rgba(0, 123, 255, 0.35) 50%,
                rgba(0, 123, 255, 0) 100%
            );
            border-radius: 50px;
            box-shadow: 0px 2px 12px rgba(0,123,255,0.25);
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
            {{-- <img src="https://oercommons.org/static/newdesign/images/logo-hidpi-square.png" width="38"> --}}
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
                @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}" method="POST" class="d-inline">
                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                    </a>
                </li>
                @endguest
                
                @auth
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>

        </div>

    </div>
</nav>


    <!-- HERO SECTION -->
    <section class="hero">
        <h1 class="hero-title">Explore STEM Learning Resources</h1>
        <p class="hero-subtitle">
            A curated collection of high-quality STEM teaching materials to support educators, students, and innovators around the world.
        </p>
    </section>

    <!-- SECTION 1 -->
    <div class="container">
        <div class="section-header">
            <h2>Building STEM Literacy</h2>
            <p>Resources designed to prepare educators for collaborating across the curriculum to build STEM literacy, interest, and engagement that will inspire students toward STEM college and careers.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($stemResources as $resource)
                <div class="col-md-6 col-lg-3">
                    @if ($resource->link)
                        <a href="{{ $resource->link }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-decoration-none text-reset">
                    @endif
                        <div class="resource-card">
                            <img src="{{ asset('storage/resources/' . $resource->image) }}"
                            class="resource-img"
                            alt="{{ $resource->title }}">
                            <div class="p-3">
                                <div class="resource-title">
                                    {{ $resource->title }}
                                </div>
                                <div class="resource-count">
                                    {{ $resource->category_resource }}
                                </div>
                            </div>
                        </div>
                        @if ($resource->link)
                            </a>
                        @endif
                </div>
            @empty
                <p class="text-center">
                    Belum ada resource untuk kategori ini.
                </p>
            @endforelse
        </div>

    </div>

    <!-- MODERN DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION 2 -->
    <div class="container pb-5">
        <div class="section-header">
            <h2>STEM Learning Resources</h2>
            <p>Find teaching materials that will help build interest in all students, regardless of their college or career pathway, to understand the role of STEM in their lives and to become informed citizens.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($learningResources as $resource)
                <div class="col-md-6 col-lg-3">
                    @if ($resource->link)
                        <a href="{{ $resource->link }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-decoration-none text-reset">
                    @endif
                        <div class="resource-card">
                            <img src="{{ asset('storage/resources/' . $resource->image) }}"
                            class="resource-img"
                            alt="{{ $resource->title }}">
                            <div class="p-3">
                                <div class="resource-title">
                                    {{ $resource->title }}
                                </div>
                                <div class="resource-count">
                                    {{ $resource->category_resource }}
                                </div>
                            </div>
                        </div>
                        @if ($resource->link)
                            </a>
                        @endif
                </div>
            @empty
                <p class="text-center">
                    Belum ada resource untuk kategori ini.
                </p>
            @endforelse
        </div>

    </div>

    <!-- MODERN DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION 3 -->
    <div class="container pb-5">
        <div class="section-header">
            <h2>Building STEM Futures</h2>
            <p>Whether you are preparing for college, pursuing a career in STEM, or want to engage in your local community as a citizen scientist, there are many ways to engage and learn.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($futureResources as $resource)
                <div class="col-md-6 col-lg-3">
                    @if ($resource->link)
                        <a href="{{ $resource->link }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-decoration-none text-reset">
                    @endif
                        <div class="resource-card">
                            <img src="{{ asset('storage/resources/' . $resource->image) }}"
                            class="resource-img"
                            alt="{{ $resource->title }}">
                            <div class="p-3">
                                <div class="resource-title">
                                    {{ $resource->title }}
                                </div>
                                <div class="resource-count">
                                    {{ $resource->category_resource }}
                                </div>
                            </div>
                        </div>
                        @if ($resource->link)
                            </a>
                        @endif
                </div>
            @empty
                <p class="text-center">
                    Belum ada resource untuk kategori ini.
                </p>
            @endforelse
        </div>
    </div>

    <!-- MODERN DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION 4 -->
    <div class="container pb-5">
        <div class="section-header">
            <h2>Featured STEM Providers</h2>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($providerResources as $resource)
                <div class="col-md-6 col-lg-3">
                    @if ($resource->link)
                        <a href="{{ $resource->link }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-decoration-none text-reset">
                    @endif
                        <div class="resource-card">
                            <img src="{{ asset('storage/resources/' . $resource->image) }}"
                            class="resource-img"
                            alt="{{ $resource->title }}">
                            <div class="p-3">
                                <div class="resource-title">
                                    {{ $resource->title }}
                                </div>
                                <div class="resource-count">
                                    {{ $resource->category_resource }}
                                </div>
                            </div>
                        </div>
                        @if ($resource->link)
                            </a>
                        @endif
                </div>
            @empty
                <p class="text-center">
                    Belum ada provider untuk kategori ini.
                </p>
            @endforelse
        </div>
    </div>

<!-- Footer -->
<footer class="pt-5 border-top">

    <div class="container">

        <div class="row footer-columns">

            <!-- Discover -->
            {{-- <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Discover</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">Resources</a></li>
                    <li><a class="footer-link" href="#">Collections</a></li>
                    <li><a class="footer-link" href="#">Providers</a></li>
                </ul>
            </div> --}}

            <!-- Community -->
            {{-- <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Community</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">All Hubs</a></li>
                    <li><a class="footer-link" href="#">All Groups</a></li>
                </ul>
            </div> --}}

            <!-- Create -->
            {{-- <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Create</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">Open Author</a></li>
                    <li><a class="footer-link" href="#">Submit a Resource</a></li>
                </ul>
            </div> --}}

            <!-- Services -->
            {{-- <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Our Services</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">About Hubs</a></li>
                    <li><a class="footer-link" href="#">About OER Commons</a></li>
                    <li><a class="footer-link" href="#">OER 101</a></li>
                    <li><a class="footer-link" href="#">Help Center</a></li>
                </ul>
            </div> --}}

            <!-- My Account -->
            {{-- <div class="col-6 col-md-2">
                <h6 class="text-uppercase">My Account</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">My Items</a></li>
                    <li><a class="footer-link" href="#">My Groups</a></li>
                    <li><a class="footer-link" href="#">My Hubs</a></li>
                </ul>
            </div> --}}

            <!-- Newsletter + Social -->
            {{-- <div class="col-6 col-md-2">
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
            </div> --}}

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
                    © 2025, Centre Steam
                </div>

                <div class="col-md-4 mb-3 mb-md-0 small">
                    <div></div>
                    <div></div>
                </div>

                <div class="col-md-4 text-md-end">
                    <img src="https://licensebuttons.net/l/by-nc-sa/3.0/88x31.png"
                        width="90">
                </div>

            </div>
        </div>
    </div>

</footer>


</body>
</html>
