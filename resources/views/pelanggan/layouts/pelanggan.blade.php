<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/style_fp.css') }}">
  <link rel="stylesheet" href="{{ asset('css/css_login.css') }}">
  <title>KostPlus</title>
</head>

<body>
  <!-- NAVIGASI -->
  <nav>
    <div class="navbar navbar-expand-lg navbar-expand-sm navbar-expand-md">
      <div class="container-fluid">
        <div class="col-2"></div>
        <div class="col-3">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('images/logo.jpeg') }}" width="220px">
            </a>
          </div>
        </div>
        <div class="7">
          <ul class="nav justify-content-end" id="menu">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">
                <img src="{{ asset('images/icon-profil.png') }}" alt="" width="25px">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">
                <img src="{{ asset('images/logout.svg') }}" alt="" width="25px">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Search">
                <img src="{{ asset('images/icon-search.png') }}" alt="" width="25px"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="navbar center navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li><a href="new_arivals.html">KOS PUTRI</a></li>
            <li><a href="product.html">KOS PUTRA</a></li>
            <li><a href="{{ route('index') }}">SEMUA</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                HARGA
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Harga Tertinggi</a></li>
                <li><a class="dropdown-item" href="#">Harga Termurah</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  @yield('content')
  <!-- FOOTER -->
  <footer>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col">
          <span class="navbar-text">
            <h6>ABOUT</h6>
            <p>
              KostPlus merupakan website yang dirancang untuk mempermudah para pencari kost agar dapat
              mendapatkan kost secara online.
            </p>
          </span>
        </div>
        <div class="col">
          <div class="container">
            <span class="navbar-text">
              <h6>CONTACT</h6>
              <p></p>
            </span>
          </div>
          <div class="container-fluid">
            <div class="row row-cols-auto">
              <a href="https://www.facebook.com/">
                <div class="col">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="black"
                      d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5Z" />
                  </svg>
                </div>
              </a>
              <a href="https://www.instagram.com/">
                <div class="col">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="black" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 16a4 4 0 1 0 0-8a4 4 0 0 0 0 8Z" />
                      <path d="M3 16V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="m17.5 6.51l.01-.011" />
                    </g>
                  </svg>
                </div>
              </a>
              <a href="https://twitter.com/">
                <div class="col">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    viewBox="0 0 24 24">
                    <path fill="black"
                      d="M22 5.8a8.49 8.49 0 0 1-2.36.64a4.13 4.13 0 0 0 1.81-2.27a8.21 8.21 0 0 1-2.61 1a4.1 4.1 0 0 0-7 3.74a11.64 11.64 0 0 1-8.45-4.29a4.16 4.16 0 0 0-.55 2.07a4.09 4.09 0 0 0 1.82 3.41a4.05 4.05 0 0 1-1.86-.51v.05a4.1 4.1 0 0 0 3.3 4a3.93 3.93 0 0 1-1.1.17a4.9 4.9 0 0 1-.77-.07a4.11 4.11 0 0 0 3.83 2.84A8.22 8.22 0 0 1 3 18.34a7.93 7.93 0 0 1-1-.06a11.57 11.57 0 0 0 6.29 1.85A11.59 11.59 0 0 0 20 8.45v-.53a8.43 8.43 0 0 0 2-2.12Z" />
                  </svg>
                </div>
              </a>
              <a href="https://www.tiktok.com/">
                <div class="col">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    viewBox="0 0 24 24">
                    <path fill="black"
                      d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48z" />
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <span class="navbar-text">
            <h6>INFORMATION</h6>
            <p></p>
            <a class="information" href="Our Story.html"> Our Story</a></p>
            <a class="information" href="#"> How To Shop</a></p>
            <a class="information" href="#"> Term & Condition</a></p>
            <a class="information" href="#"> Privacy Policy</a></p>
          </span>
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <span class="navbar-text">
            <center>
              <h5>
                KostPlus © 2023
              </h5>
            </center>
          </span>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>

</html>
