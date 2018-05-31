<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="asset/vendors/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    @stack('styles')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto">



<li class="nav-item dropdown">
<a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<img src="https://coreui.io/demo/img/avatars/6.jpg" class="img-avatar" alt="{{ Auth::user()->name }}">
</a>
<div class="dropdown-menu dropdown-menu-right">
<div class="dropdown-header text-center">
<strong>Account</strong>
</div>
<a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
<a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
<a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
<a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
<a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    <i class="fa fa-lock"></i> Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</div>
</li>



</ul>
</header>
<div class="app-body">
<div class="sidebar">
<nav class="sidebar-nav">
<ul class="nav">
<li class="nav-item">
<a class="nav-link" href="home"><i class="fa fa-home"></i> Dashboard</a>
</li>
<li class="nav-item">
<a class="nav-link" href="market"><i class="fa fa-shopping-cart"></i> Market</a>
</li>
<li class="nav-item">
<a class="nav-link" href="coin"><i class="fa fa-btc"></i> Coin/Token</a>
</li>
<li class="nav-item">
<a class="nav-link" href="signal"><i class="fa fa-signal"></i> Signal</a>
</li>
<li class="nav-item">
<a class="nav-link" href="alarm"><i class="fa fa-clock-o"></i> Alarm</a>
</li>

</ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>

@yield('content')

</div>
<footer class="app-footer">
<span><a href="{{URL::to('/')}}">OwlBit</a> © 2018</span>
<span class="ml-auto">Powered by <a href="https://owldevmediatama.com">OwlDev Mediatama</a></span>
</footer>

<script src="asset/vendors/js/jquery.min.js"></script>
<script src="asset/vendors/js/bootstrap.min.js"></script>
<script src="asset/vendors/js/pace.min.js"></script>
<script src="asset/js/app.js"></script>
@stack('scripts')
</body>

</html>
