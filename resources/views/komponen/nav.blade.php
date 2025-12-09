    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top shadow-sm">
        <div class="nav-container">

            <!-- LEFT (LOGO) -->
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <img src="{{ asset('assets/logo_steam.png') }}" width="38">
                CENTRE STEAM
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