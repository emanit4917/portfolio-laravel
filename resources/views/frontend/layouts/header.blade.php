<div class="preloader">
  <div class="dots dot1">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
</div>
<!--================== Header Section Start ==================-->
<header class="navigation border-bottom">
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{route('home.sect')}}">
      <i class="{{$logo_input->logo_icon}}"></i>{{$logo_input->logo_title}}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home.sect')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @@about" href="{{route('about')}}">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link @@portfolio" href="portfolio.html">Portfolio</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle @@portfolio @@portfolio-single" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Portfolio
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item @@portfolio" href="{{route('portfolio')}}">Portfolio</a></li>
            <li><a class="dropdown-item @@portfolio-single" href="{{route('portfoliosingle')}}">Portfolio single</a></li>
          </ul>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle @@blog @@blog-single" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item @@blog" href="">blog </a></li>
            <li><a class="dropdown-item @@blog-single" href="">blog single</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link @@contact" href="{{route('contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<!--================== Header Section End ==================-->