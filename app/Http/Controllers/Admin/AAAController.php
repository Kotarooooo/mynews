<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AAAController extends Controller
{
    //
}


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AAAController extends Controller
{
     // 以下を追記
  public function bbb()
  {
      return view('admin.news.create');
  }

}