<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>The Lawns Restaurant - Admin</title>

  <!-- Styles -->

  <link href="/backend/css/admin.css" rel="stylesheet">


  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light nos-nav">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="navbar-nav  ml-auto">
      <li class="nav-item">

            <router-link class="dropdown-item" to="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i>
            </router-link>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar nos-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="/images/logo.png" alt="LAWNS" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="/images/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/dashboard" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <router-link to="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/contacts" class="nav-link">
              <i class="nav-icon fa fa-address-book-o"></i>
              <p>
                Contacts
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/menu" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Menu
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/blog" class="nav-link">
              <i class="nav-icon fa fa-rss"></i>
              <p>
                Blog
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/portfolio" class="nav-link">
              <i class="nav-icon fa fa-paint-brush"></i>
              <p>
                Portfolio
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/testimonials" class="nav-link">
              <i class="nav-icon fa fa-commenting-o"></i>
              <p>
                Testimonials
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </router-link>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <router-view></router-view>
  </div>
  <!-- Main Footer -->
  {{-- <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <router-link to="https://adminlte.io">AdminLTE.io</router-link>.</strong> All rights reserved.
  </footer> --}}
</div>
<!-- ./wrapper -->

<script src="/backend/js/app.js"></script>
</body>
</html>
