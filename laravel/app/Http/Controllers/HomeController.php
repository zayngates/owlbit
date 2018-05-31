<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Coin;
use App\Market;
use App\Compare;
include "../../ccxt/ccxt.php";

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request)
  {
    $request->user()->authorizeRoles(['member', 'manager']);

    $coin = DB::table('data_coin')->groupBy('name')->get();

    return view('home', ['coin' => $coin]);
  }

  public function data_binance(Request $request)
  {
    $request->user()->authorizeRoles(['member', 'manager']);

    $binanceq   = new \ccxt\binance();
    $coins      = DB::table('data_coin')
    ->selectRaw('data_coin.name as coin_name,data_coin.id,data_market.name as market_name')
    ->join('data_market','data_market.id','data_coin.market_id')
    ->where('data_coin.market_id','7')->get();

    $count      = count($coins);

    $binance = array();
    $cos     = array();
    $coin_name  = array();
    $market_name= array();
    for($i = 0; $i < $count; $i++){
      $coin       = $coins[$i]->coin_name;
      $binancex   = $binanceq->fetch_ticker($coin);
      $binance[]  = $binancex;
      $cos[]      = $coins[$i]->id;
      $coin_name[]  = $coins[$i]->coin_name;
      $market_name[]= $coins[$i]->market_name;
    }

    for($i = 0; $i < $count; $i++){
      $compare = new Compare();
      $coin    = $binance[$i]['symbol'];
      $compare = Compare::firstOrNew(['coin' => $cos[$i]]);
      $compare->coin        = $cos[$i];
      $compare->coin_name   = $coin_name[$i];
      $compare->market_name = $market_name[$i];
      $compare->high      = $binance[$i]['high'];
      $compare->low       = $binance[$i]['low'];
      $compare->last      = $binance[$i]['last'];
      $compare->ask       = $binance[$i]['ask'];
      $compare->bid       = $binance[$i]['bid'];
      $compare->close     = $binance[$i]['close'];
      $compare->volume    = $binance[$i]['baseVolume'];
      $compare->open      = $binance[$i]['open'];
      $compare->time      = $binance[$i]['timestamp'];
      $compare->save();

    }


  }


  public function data_cobinhood(Request $request)
  {
    $request->user()->authorizeRoles(['member', 'manager']);

    $cobinhoodq   = new \ccxt\cobinhood();
    $coins      = DB::table('data_coin')
    ->selectRaw('data_coin.name as coin_name,data_coin.id,data_market.name as market_name')
    ->join('data_market','data_market.id','data_coin.market_id')
    ->where('data_coin.market_id','40')->get();
    $count      = count($coins);

    $cobinhood = array();
    $cos     = array();
    $coin_name  = array();
    $market_name= array();
    for($i = 0; $i < $count; $i++){
      $coin         = $coins[$i]->coin_name;
      $cobinhoodx   = $cobinhoodq->fetch_ticker($coin);
      $cobinhood[]  = $cobinhoodx;
      $cos[]        = $coins[$i]->id;
      $coin_name[]  = $coins[$i]->coin_name;
      $market_name[]= $coins[$i]->market_name;
    }

    for($i = 0; $i < $count; $i++){
      $compare = new Compare();
      $coin    = $cobinhood[$i]['symbol'];
      $compare = Compare::firstOrNew(['coin' => $cos[$i]]);
      $compare->coin        = $cos[$i];
      $compare->coin_name   = $coin_name[$i];
      $compare->market_name = $market_name[$i];
      $compare->high      = $cobinhood[$i]['high'];
      $compare->low       = $cobinhood[$i]['low'];
      $compare->last      = $cobinhood[$i]['last'];
      $compare->ask       = $cobinhood[$i]['ask'];
      $compare->bid       = $cobinhood[$i]['bid'];
      $compare->close     = $cobinhood[$i]['close'];
      $compare->volume    = $cobinhood[$i]['baseVolume'];
      $compare->open      = $cobinhood[$i]['open'];
      $compare->time      = $cobinhood[$i]['timestamp'];
      $compare->save();

    }


  }

  /*
  public function someAdminStuff(Request $request)
  {
    $request->user()->authorizeRoles('manager');
    return view('some.view');
  }
  */
}
