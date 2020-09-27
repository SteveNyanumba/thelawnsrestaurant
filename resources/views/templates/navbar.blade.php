<nav class="navbar navbar-expand-lg navbar-dark nos_navbar bg-dark nos-navbar-light" id="nos-navbar">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="The Lawns Restaurant" width="100px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nos-nav" aria-controls="nos-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="nos-nav">
        <ul class="navbar-nav ml-auto">
          <li @if (Request::is('/'))
          class="nav-item active"
          @else
          class="nav-item"
          @endif><a href="/" class="nav-link">Home</a></li>

          <li @if (Request::is('menu'))
          class="nav-item active"
          @else
          class="nav-item"
          @endif><a href="/menu" class="nav-link">Menu</a></li>

          <li @if (Request::is('events'))
          class="nav-item active"
          @else
          class="nav-item"
          @endif><a href="/events" class="nav-link">Events</a></li>

          <li @if (Request::is('blog'))
          class="nav-item active"
          @else
          class="nav-item"
          @endif><a href="/blog" class="nav-link">Blog</a></li>

          <li @if (Request::is('about'))
          class="nav-item active"
          @else
          class="nav-item"
          @endif><a href="/about" class="nav-link">About Us</a></li>

          <li @if (Request::is('contact'))
          class="nav-item active"
          @else
          class="nav-item"
          @endif><a href="/contact" class="nav-link">Contact</a></li>

          <li class="nav-item cart">
              <a href="/cart" class="nav-link">
                <span class="fi-ecommerce-invoice"></span>
                    <span class="bag d-flex justify-content-center align-items-center"><small>1</small></span>
                </a>
            </li>
        </ul>
      </div>
      </div>
  </nav>
<!-- END nav -->
