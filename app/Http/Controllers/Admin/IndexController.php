<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Index;



class IndexController extends Controller
{
  public function index()
  {
      return view('admin.index');
  }
}