<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compare extends Model
{
  protected $table = 'compare';
  protected $fillable = ['coin', 'high', 'low', 'last', 'ask', 'bid', 'close', 'volume', 'open', 'time', 'market_id'];
  public $timestamps = false;
}
