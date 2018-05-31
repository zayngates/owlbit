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
</div>

</main>
@endsection
