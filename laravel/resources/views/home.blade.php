@extends('layouts.base')
@push('styles')
    <link href="asset/vendors/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
<i class="fa fa-btc"></i> Arbitrate
<div class="card-actions">
<a href="#">
<small class="text-muted">docs</small>
</a>
</div>
</div>
<div class="card-body">

<table id="home" class="table table-striped table-bordered datatable">
<thead>
<tr>
<th>Coin/Token</th>
<th>Buy From</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>Sell To</th>
<th></th>
<th></th>
<th align="center">%</th>
</tr>
</thead>
<tbody>

@foreach($coin as $c)
<?php
$compare = DB::table('compare')->where('coin_name',$c->name)->get();
?>
<tr>
<td>{{$c->name}}</td>
@foreach($compare as $co)
<td>{{$co->market_name}}<br>Buy: {{$co->ask}}<br>Sell: {{$co->bid}}</td>
<td>{{$co->market_name}}<br>Sell: {{$co->bid}}<br>Buy: {{$co->ask}}</td>
<td>{{$co->ask}}</td>
<td>{{$co->bid}}</td>
@endforeach
<td></td>
</tr>
@endforeach
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
@push('scripts')
    <script type="text/javascript" src="asset/vendors/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="asset/vendors/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready( function () {

      $('#home').DataTable( {
      "columnDefs": [
        {
          "render": function ( data, type, row ) {
            var persen = row[3] - row[8];
            var ps = persen * 100;
            return Number(ps).toFixed(8).replace(/\.?0+$/,""+'%');
          },
          "targets": 9
        },
        { "visible": false,  "targets": [ 2,3,4,5,7,8 ] }
      ]
  } );
    } );
    </script>
@endpush
