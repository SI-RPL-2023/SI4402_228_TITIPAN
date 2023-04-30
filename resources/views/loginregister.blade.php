<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet" />
  {{-- CSS STYLE --}}
  <link rel="stylesheet" href="{{ asset('css/loginregister.css') }}" />
  <title>Tiba-tiba Pindahan</title>
</head>

<body>
  <!-- Navbar -->
  <nav>
    <div class="logo">

      <a href="/">
        <h3><img src="images/titipanfix.png" alt="" height="80px" width="80px" style="float: left"></h3>
      </a>
      <!--BG MENU-->
    </div>

    <ul>
      <li><a href="/" class="nav-link {{ $active === 'landingpage' ? 'active' : '' }}">Home</a></li>
      <li><a href="/jasapindahan" class="nav-link {{ $active === 'jasapindahan' ? 'active' : '' }}">Jasa Pindahan</a>
      </li>
      <li><a href="/jasapenyimpanan" class="nav-link {{ $active === 'jasapenyimpanan' ? 'active' : '' }}">Jasa
          Penyimpanan</a></li>
      <li><a href="/jasapengiriman" class="nav-link {{ $active === 'jasapengiriman' ? 'active' : '' }}">Jasa
          Pengiriman</a></li>
      <li><a href="" class="nav-link {{ $active === 'landingpage' ? 'active' : '' }}">Contact</a></li>
    </ul>

    <div class="menu-toggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
      <!-- Menu TOGGLE-->
    </div>
  </nav>
  {{-- navbar --}}
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="forms-container">
          <div class="signin-signup">
            <form action="{{ route('login') }}" class="sign-in-form" id="login-form" method="POST">
              <h2 class="title">Sign in</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" />
              </div>
              <input type="submit" value="Login" class="btn solid" />
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
            <form action="{{ route('register') }}" class="sign-up-form" id="register-form" method="POST">
              <h2 class="title">Sign up</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" />
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" />
              </div>
              <input type="submit" class="btn" value="Sign up" />
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
              <h3 style="margin-top: 35px">New here ?</h3>
              <p>
                For full access to our website's features, please log in using your account credentials. Logging in
                ensures a
                personalized experience tailored to your preferences and needs. If you do not have an account, kindly
                click the
                "Sign up" button to create one.
              </p>
              <button class="btn transparent" id="sign-up-btn">
                Sign up
              </button>
            </div>
            <img src="{{ asset('images/log.svg') }}" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3 style="margin-top: 35px">One of us ?</h3>
              <p>
                Registering an account allows you to save your favorite items, track orders, and enjoy faster checkout.
                As a registered
                user, you will also have access to exclusive promotions and discounts. Thank you for choosing our
                website, and we look
                forward to providing you with an exceptional online experience.
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Sign in
              </button>
            </div>
            <img src="{{ asset('images/register.svg') }}" class="image" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>

  <script src="{{ asset('js/loginregister.js') }}"></script>
</body>

</html>