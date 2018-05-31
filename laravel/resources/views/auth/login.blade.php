<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>{{ config('app.name', 'Laravel') }}</title>

<link href="asset/vendors/css/font-awesome.min.css" rel="stylesheet">
<link href="asset/vendors/css/simple-line-icons.min.css" rel="stylesheet">

<link href="asset/css/style.css" rel="stylesheet">

</head>
<body class="app flex-row align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card-group">
<div class="card p-4">

  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}

<div class="card-body">
<h1>Login</h1>
<p class="text-muted">Sign In to your account</p>

<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-user"></i></span>
</div>
<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
@if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
</div>

<div class="input-group mb-4">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-lock"></i></span>
</div>
<input id="password" type="password" class="form-control" name="password" required>
@if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
    </div>
</div>

<div class="row">
<div class="col-6">
<button type="submit" class="btn btn-primary px-4">Login</button>
</div>
<div class="col-6 text-right">
<a href="{{ route('password.request') }}">
<button type="button" class="btn btn-link px-0">Forgot password?</button>
</a>
</div>
</div>
</div>

</form>

</div>
<div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
<div class="card-body text-center">
<div>
<h2>Sign up</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<button type="button" class="btn btn-primary active mt-3">Register Now!</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="asset/vendors/js/jquery.min.js"></script>
<script src="asset/vendors/js/popper.min.js"></script>
<script src="asset/vendors/js/bootstrap.min.js"></script>
</body>
</html>
