<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRE STEAM</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo_steam.png') }}">

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
    @include('komponen.nav')

    @yield('index')

    @include('komponen.footer')

</body>
</html>