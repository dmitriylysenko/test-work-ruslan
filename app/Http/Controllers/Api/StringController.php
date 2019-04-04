<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\RandomString;
use Illuminate\Http\Response;

class StringController extends Controller
{
  public function generate()
  {
    $randomString = new RandomString();
    $randomString->value = md5(uniqid(rand(), true));
    $randomString->saveOrFail();

    return response()->json([$randomString], Response::HTTP_CREATED);
  }

  public function retrieve($id)
  {
    return response()->json(RandomString::find($id));
  }

  public function list()
  {
    return response()->json(RandomString::all());
  }


}
