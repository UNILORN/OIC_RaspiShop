<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MST_PRODUCT;

class ProductController extends Controller
{
    public function index(Request $request){
      $raspi = MST_PRODUCT::where('type_id',1)->get();
      $sdcard = MST_PRODUCT::where('type_id',2)->get();
      $os = MST_PRODUCT::where('type_id',3)->get();
      return view('product',compact('raspi','sdcard','os','request'));
    }

}
