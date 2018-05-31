<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignalController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(Request $request)
  {
    $request->user()->authorizeRoles(['member', 'manager']);
    return view('signal');
  }
}
