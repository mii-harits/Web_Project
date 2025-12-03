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
        .nav-container {
            max-width: 1250px;
            margin: 0 auto;
            width: 100%;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 20px;
        }
        .navbar-nav.mx-auto {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 25px;
        }
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
        .ms-auto {
            margin-left: auto !important;
        }

        .content-card {
            border-radius: 15px;
        }

        .container-fluid.px-5 {
            max-width: 1600px;
            padding-left: 40px;
            padding-right: 40px;
        }

        /* ==============================
           TABLE
        =============================== */
        table.soft-table {
            width: 100%;
            border-collapse: separate !important;
            border-spacing: 0;
            border: 2px solid #d0d7e2;
            border-radius: 12px;
            background: white;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        table.soft-table thead th {
            background: #E8F6FF;
            color: #5A6E7A;
            padding: 8px 10px;
            border-bottom: 2px solid #d3e4f3;
            font-weight: 400 !important;
            text-align: center;
        }

        table.soft-table tbody td {
            background: #E8F6FFe;
            color: #5A6E7A;
            padding: 8px 10px;
            font-size: 14px;
            border-bottom: 1px solid #e3e9f0;
            vertical-align: middle;
        }

        table.soft-table tbody tr:last-child td {
            border-bottom: none; /* hilangkan border bawah di row terakhir */
        }

        table.soft-table tbody td:first-child {
            padding-left: 18px !important;
            padding-right: 18px !important;
            text-align: center;
            min-width: 55px;
        }

        table.soft-table td.description-cell {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden !important;
            text-overflow: ellipse;
            position: relative;
            max-width: 500px;
            text-align: justify
        }

        .text-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .cell-badge {
            display: inline-block;
            background: #f0f4ff;
            color: #007bff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
            text-align: center;
        }

        table.soft-table td.actions-cell {
            text-align: center;
        }

        table.soft-table td img {
            border-radius: 6px;
            object-fit: cover;
        }

        table th, table td {
            vertical-align: middle !important;
        }

        .actions-cell .btn {
            margin: 0 2px !important;
            padding: 0 !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
            border-radius: 8px !important;
            background: none !important;   /* hilangkan kotak */
            border: none !important;       /* hilangkan border */
            box-shadow: none !important;
            border: none !important;
        }

        .actions-cell .btn i { 
            font-size: 17px;               /* ukuran icon */
            transition: 0.2s ease;      
        }

        /* Warna icon */
        .actions-cell .btn-edit i {
            color: #007bff; /* biru */
        }
        .actions-cell .btn-delete i {
            color: #dc3545; /* merah */
        }

        .actions-cell .btn-edit:hover i {
            color: #0056b3; /* biru darker */
            transform: scale(1.15);
        }
        .actions-cell .btn-delete:hover i {
            color: #a71d2a; /* merah darker */
            transform: scale(1.15);
        }


        .btn-warning.btn-icon {
            border-radius: 8px !important;     /* fix bentuk */
        }

        .btn-danger.btn-icon {
            border-radius: 8px !important;
        }

        /* =====================================
           ✔ FIX: tombol selalu sejajar menyamping
        ======================================*/
        .actions-cell {
            white-space: nowrap !important;
        }
        .actions-cell form {
            display: inline-block !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        .btn-icon i {
            font-size: 14px;
        }

        /* Footer styles */
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
        .footer-policy {
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }
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
        .footer-columns {
            row-gap: 30px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg py-3 sticky-top shadow-sm">
    <div class="nav-container">
        <a class="navbar-brand fw-bold" href="">
            <img src="https://oercommons.org/static/newdesign/images/logo-hidpi-square.png" width="38">
            STEM Center
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            @auth
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('stem') }}">STEM</a></li>
            </ul>
            @endauth
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
<div class="container-fluid mt-4 px-5">
    <div class="card shadow-sm p-4 content-card">

        <!-- TITLE + ADD DATA -->
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="fw-bold mb-0">Daftar Resources</h3>
            <a href="{{ route('create') }}" class="btn btn-primary">+ Add Book</a>
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
            <table class="table soft-table align-middle">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori STEM</th>
                        <th>Kategori Resources</th>
                        <th>Deskripsi</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resources as $item)
                    <tr>
                        <td class="center-text">{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td class="center-text"><span class="cell-badge">{{ $item->category_stem }}</span></td>
                        <td class="center-text"><span class="cell-badge">{{ $item->category_resource }}</span></td>
                        <td class="description-cell">
                            <div class="text-clamp">
                                {{ $item->description }}
                            </div>
                            <button class="btn btn-link btn-sm p-0 read-more">Selengkapnya</button>
                        </td>
                        <td class="center-text"><a href="{{ $item->link }}" class="text-primary">Kunjungi</a></td>
                        <td class="center-text"><img src="{{ asset('storage/resources/' . $item->image) }}" width="60"></td>
                        <td class="actions-cell">
                        
                            <!-- Tombol EDIT -->
                            <a href="{{ route('resources.edit', $item->id) }}" class="btn btn-sm btn-edit" title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        
                            <!-- Tombol DELETE -->
                            <form action="{{ route('resources.destroy', $item->id) }}" method="POST" class="d-inline m-0 p-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-delete" title="Delete"onclick="return confirm('Hapus item ini?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        
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

            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Discover</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">Resources</a></li>
                    <li><a class="footer-link" href="#">Collections</a></li>
                    <li><a class="footer-link" href="#">Providers</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Community</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">All Hubs</a></li>
                    <li><a class="footer-link" href="#">All Groups</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Create</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">Open Author</a></li>
                    <li><a class="footer-link" href="#">Submit a Resource</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">Our Services</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">About Hubs</a></li>
                    <li><a class="footer-link" href="#">About OER Commons</a></li>
                    <li><a class="footer-link" href="#">OER 101</a></li>
                    <li><a class="footer-link" href="#">Help Center</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2">
                <h6 class="text-uppercase">My Account</h6>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#">My Items</a></li>
                    <li><a class="footer-link" href="#">My Groups</a></li>
                    <li><a class="footer-link" href="#">My Hubs</a></li>
                </ul>
            </div>

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

        <div class="footer-policy mt-4 pb-3 d-flex flex-wrap gap-3 small">
            <a href="#" class="footer-link">Privacy Policy</a>
            <a href="#" class="footer-link">Terms of Service</a>
            <a href="#" class="footer-link">Collection Policy</a>
            <a href="#" class="footer-link">DMCA</a>
        </div>

    </div>

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
                    <img src="https://licensebuttons.net/l/by-nc-sa/3.0/88x31.png" width="90">
                </div>

            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.read-more');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const td = this.closest('td');
            const clamp = td.querySelector('.text-clamp');

            if (clamp.style.display === 'block') {
                clamp.style.display = '-webkit-box';
                this.textContent = 'Selengkapnya';
            } else {
                clamp.style.display = 'block';
                this.textContent = 'Tutup';
            }
        });
    });
});

</script>

</body>
</html>
