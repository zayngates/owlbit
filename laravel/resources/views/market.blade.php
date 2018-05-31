@extends('layouts.base')
@push('styles')
    <link href="asset/vendors/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@push('scripts')
    <script type="text/javascript" src="asset/vendors/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="asset/vendors/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready( function () {
       $('#market').DataTable();
    } );
    </script>
@endpush
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

<div class="container-fluid">
<div class="animated fadeIn">
<div class="card">
<div class="card-header">
<i class="fa fa-shopping-cart"></i> Data Market
<div class="card-actions">
<a href="#">
<small class="text-muted">docs</small>
</a>
</div>
</div>
<div class="card-body">

<table id="market" class="table table-striped table-bordered datatable">
<thead>
<tr>
<th></th>
<th>ID</th>
<th>Name</th>
<th>Ver</th>
<th align="center">Doc</th>
<th>Countries</th>
</tr>
</thead>
<tbody>

<tr>
<td><a target="_blank" href="https://user-images.githubusercontent.com/1294454/27766021-420bd9fc-5ecb-11e7-8ed6-56d0081efed2.jpg"><img src="https://user-images.githubusercontent.com/1294454/27766021-420bd9fc-5ecb-11e7-8ed6-56d0081efed2.jpg" alt="_1broker" style="max-width:100%;"></a></td>
<td>_1broker</td>
<td>1Broker</td>
<td>2</td>
<td align="center"><a href="https://1broker.com/?c=en/content/api-documentation" rel="nofollow">API</a></td>
<td>US</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
</div>

</main>
@endsection
