<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    {{-- CSS STYLE --}}
    <link rel="stylesheet" href="{{ asset('css/loginregister.css') }}" />
    <title>{{ $title }} | Tiba-tiba Pindahan</title>
</head>

<body>
    {{--
    <!-- Navbar -->
    <nav>
        <div class="logo">

            <a href="/">
                <h3><img src="images/titipanfix.png" alt="" height="80px" width="80px" style="float: left"></h3>
            </a>
            <!--BG MENU-->
        </div>

        <ul class="p-1">
            <li><a href="/" class="{{ $title === 'Home' ? 'active' : '' }}">Home</a></li>
            <li><a href="/jasapindahan" class="{{ $title === 'Jasa Pindahan' ? 'active' : '' }}">Jasa
                    Pindahan</a>
            </li>
            <li><a href="/jasapenyimpanan" class="{{ $title=== 'Jasa Penyimpanan' ? 'active' : '' }}">Jasa
                    Penyimpanan</a></li>
            <li><a href="/jasapengiriman" class="{{ $title=== 'Jasa Pengiriman' ? 'active' : '' }}">Jasa
                    Pengiriman</a></li>
            <li><a href="/contact" class="{{ $title === 'Contact' ? 'active' : '' }}">Contact</a></li>
        </ul>

        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <!-- Menu TOGGLE-->
        </div>
    </nav>
    navbar --}}
    <div class="container">
        <div class="forms-container">

            <div class="signin-signup">
                <form action="/sesi/login" class="sign-in-form" method="POST">
                    @csrf
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" style="">
                        <ul>
                            @foreach ($errors->all() as $item)
                            <li><strong>{{ $item }}</strong></li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email" name="email" value="{{ Session::get('email') }}"
                            autocomplete="off" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <button type="submit" value="Login" class="btn solid" name="submit-login">Login</button>
                    <a href="/landingpage" class="back-to-menu">
                        <p style="margin-bottom: 0;">Back To Menu </p>
                    </a>
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="/sesi/create" method="POST" class="sign-up-form" id="create">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Name" value="{{ Session::get('name') }}" name="name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" value="{{ Session::get('email') }}" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" placeholder="Address" value="{{ Session::get('address') }}" name="address" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-calendar-alt"></i>
                        <input type="date" placeholder="Date Birth" value="" name="date_birth"
                            style="padding-top:17px" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="number" placeholder="Phone Number" value="{{ Session::get('phone number') }}"
                            name="phone_number" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <button type="submit" class="btn" value="Sign up" name="submit-signup">Sign
                        Up</button>
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3 style="margin-top: 35px">Belom Mempunyai Akun ?</h3>
                    <p>
                        Jika Anda belum memiliki akun, silakan daftar terlebih dahulu untuk dapat mengakses layanan
                        kami. Klik tombol dibawah ini
                    </p>
                    <button class="btn transparent" id="sign-up-btn" data-id="123">
                        Daftar
                    </button>
                </div>
                <img src="{{ asset('images/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3 style="margin-top: 35px">Sudah Memiliki Akun ?</h3>
                    <p>
                        Jika anda sudah memiliki akun maka silahkan login terlebih dahulu untuk menikmati layanan dari
                        kami.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="{{ asset('images/register.svg') }}" class="image" alt="" />
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/loginregister.js') }}"></script>
</body>

</html>