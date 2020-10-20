<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/frontend/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>The Lawns Restaurant</title>
</head>
<body>
    <div id="app">
    <div id="nos-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#0e2749"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1f7738"/>
        </svg>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark nos_navbar bg-dark nos-navbar-light" id="nos-navbar">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="The Lawns Restaurant" width="100px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nos-nav" aria-controls="nos-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
          </button>
          <div class="collapse navbar-collapse" id="nos-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <router-link to="/" class="nav-link">Home</router-link>
              </li>

              <li class="nav-item">
                  <router-link to="/menu" class="nav-link">Menu</router-link>
                </li>

              <li class="nav-item">
                  <router-link to="/events" class="nav-link">Events</router-link>
                </li>
              <li class="nav-item">
                  <router-link to="/blog" class="nav-link">Blog</router-link>
                </li>
              <li class="nav-item">
                  <router-link to="/about" class="nav-link">About</router-link>
                </li>
              <li class="nav-item">
                  <router-link to="/contact" class="nav-link">Contact</router-link>
                </li>
            </ul>
          </div>
          </div>
      </nav>
    <!-- END nav -->
        <router-view></router-view>
    </div>

    <script src="/frontend/js/main.js"></script>
</body>
</html>
