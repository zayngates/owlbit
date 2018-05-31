@extends('layouts.base')

@section('content')
<main class="main">
<br>
<div class="container-fluid">
<div class="animated fadeIn">
<div class="row">
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
</div>

</div>
<div class="container-fluid">
<div class="animated fadeIn">
<div class="email-app mb-4">
<nav>
<a href="#" class="btn btn-danger btn-block">New Massage</a>
<ul class="nav">
<li class="nav-item">
<a class="nav-link" href="#">
<div class="header">
<div class="from">
<img class="avatar" src="https://image.freepik.com/free-icon/male-user-shadow_318-34042.jpg">&nbsp;&nbsp;
<span>Lukasz <span class="badge badge-danger">4</span></span>
</div>
</div></a>
</li>
</ul>
</nav>
<main class="message">
<div class="toolbar">
<div class="details">
<div class="header">
<img class="avatar" src="https://image.freepik.com/free-icon/male-user-shadow_318-34042.jpg">
<div class="from">
<span>Lukasz Holeczek</span>
<a href="https://coreui.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="274b524c46545d674548485354535546574a46545342550944484a">[email&#160;protected]</a>
</div>
<div class="date">Today, <b>3:47 PM</b></div>
</div>
<div data-spy="scroll" data-target="#slimtest1" data-offset="50">
</div>
<div class="content" style=" position: relative; overflow-y: scroll; height: 200px;">
<div id="slimtest1">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
    <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
    <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
    <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
    <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
</div>
</div>
</div>
</main>
</div>
</div>
</div>

</div>

</main>
@endsection
