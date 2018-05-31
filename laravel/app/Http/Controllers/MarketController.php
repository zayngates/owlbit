<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
include "../../ccxt/ccxt.php";

class MarketController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request)
  {
    $request->user()->authorizeRoles(['member', 'manager']);
    return view('market');
  }

  public function data_market(Request $request)
  {
    $request->user()->authorizeRoles(['member', 'manager']);
var_dump (\ccxt\Exchange::$exchanges);
  }

}
