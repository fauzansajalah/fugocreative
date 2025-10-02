<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FugoCreative')</title>
    
    <link rel="preload" href="{{ asset('img/glow.png') }}" as="image">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;800&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Section untuk CSS khusus halaman --}}
    @yield('head')

    <style>
      body {
          font-family: 'Montserrat', sans-serif;
          font-weight: 300;
          background: url('/img/glow.png') no-repeat center center fixed;
          background-size: cover;
          margin: 0;
          padding: 0;
      }

      /* Navbar */
      .navbar-brand img {
          height: 100px;
          width: auto;
      }

      .navbar {
          padding-top: 5px;
          padding-bottom: 5px;
          margin-top: -10px;
          background-color: transparent;
      }

      .navbar-nav {
          gap: 30px;
          margin-left: 40px; 
      }

      .navbar .nav-link {
          font-family: 'Montserrat', sans-serif;
          font-weight: 300;
          font-size: 18px;
          color: #44B486 !important;
      }

      .navbar .nav-link:hover {
          color: #2d7f5b !important;
      }

      /* Contact section */
      .navbar .contact-section {
          margin-left: auto;
          display: flex;
          align-items: center;
          gap: 8px;
      }

      .navbar .contact-section i {
          color: #44B486;
      }

      /* Gradient Text */
      .gradient-text {
          font-family: 'Montserrat', sans-serif;
          font-weight: 800;
          font-size: 80px;
          text-transform: uppercase;
          background: linear-gradient(to right, #ffffff, #888888, #222222);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          color: transparent;
          opacity: 0;
          transform: translateX(-100px);
          animation: slideIn 2s ease-out forwards;
      }

      @keyframes slideIn {
          to {
              opacity: 1;
              transform: translateX(0);
          }
      }

      /* Hero Section */
      .hero-section {
          height: 100vh;
          display: flex;
          justify-content: flex-start;
          align-items: center;
          padding-left: 10%;
      }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-4 menu-shift">
                    <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                   <li><a class="nav-link" href="{{ route('portofolio') }}">Portofolio</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li><a class="nav-link" href="{{ route('services') }}">Service</a></li>
                    <li><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                </ul>

                <div class="contact-section">
                    <i class="bi bi-envelope-fill fs-5"></i>
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Content halaman --}}
    <main>
        @yield('content')
    </main>
    
    <script>
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', function() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      
      if(scrollTop > lastScrollTop){
          // Scroll ke bawah → sembunyikan navbar
          navbar.style.top = "-120px"; // sesuaikan dengan tinggi navbar
          navbar.style.transition = "top 0.3s";
      } else {
          // Scroll ke atas → munculkan navbar
          navbar.style.top = "0";
          navbar.style.transition = "top 0.3s";
      }

      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // untuk mobile
  }, false);
</script>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
