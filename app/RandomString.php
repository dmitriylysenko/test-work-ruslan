<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RandomString extends Model
{
  protected $fillable = [
    'value'
  ];

  public static function new(): self
  {
    return static::create([
      'value' =>  rand()
    ]);
  }

}
