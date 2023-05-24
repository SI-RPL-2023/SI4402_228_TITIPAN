<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">

            <img src="{{ asset('images/titipanfix.png')}}" class="image" alt="">
            <h1>TITIPAN</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">

            <ul>
                @if(Auth::check())
                <li><a href="/home" class="nav-link {{ $active === 'Home' ? 'active' : '' }}">Home</a></li>
                <li>
                    @elseif(!Auth::check())
                <li><a href="/landingpage" class="nav-link {{ $active === 'landingpage' ? 'active' : '' }}">Home</a>
                </li>
                @else
                @endif
                <li>
                    <a href="jasapindahan" class="nav-link {{ $active === 'jasapindahan' ? 'active' : '' }}">Jasa
                        Pindahan</a>
                </li>
                <li></li>
                <a href="jasapenyimpanan" class="nav-link {{ $active === 'jasapenyimpanan' ? 'active' : '' }}">Jasa
                    Penyimpanan</a>
                </li>
                <li>
                    <a href="jasapengiriman" class="nav-link {{ $active === 'jasapengiriman' ? 'active' : '' }}">Jasa
                        Pengiriman</a>
                </li>
                <li><a href="/contact" class="nav-link {{ $title === 'Contact' ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>
        <ul class="navbar-nav ms-auto px-5">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                    style="color:#fff">
                    <i class="bi bi-person-fill" style="color: #fff"></i>
                    @if (auth()->check())
                    {{ auth()->user()->name }}
                    @endif
                </a>
                <ul class="dropdown-menu fs-6">
                    @if (Auth::check())
                    @if (Auth::user()->role === 'admin')
                    <li>
                        <a class="dropdown-item" href="/admin/dashboard" style="color: #3EABB3;">Dashboard Admin</a>
                    </li>
                    @elseif(Auth::user()->role === 'customer')
                    <li>
                        <a class="dropdown-item" href="/profile" style="color: #3EABB3;">Profile</a>
                    </li>
                    @endif
                    <li><a class="dropdown-item" href="/contact" style="color: #3EABB3;">Contact</a>
                    </li>
                    <li><a class="dropdown-item" href="/sesi/logout" style="color: #3EABB3;">Logout</a>
                    </li>
                    @else
                    <li><a class="dropdown-item @if ($title === 'Login & Register') @endif" href="/sesi"
                            style="color: #3EABB3;">Login</a>
                    </li>
                    <li><a class="dropdown-item @if ($title === 'Login & Register') @endif" href="/sesi/register"
                            style="color: #3EABB3;">Register</a>
                    </li>
                    @endif
                </ul>
            </div>
        </ul>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->