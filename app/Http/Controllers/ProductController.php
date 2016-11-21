<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MST_PRODUCT;

class ProductController extends Controller
{
    public function index(){
      $raspidata = MST_PRODUCT::where('type_id',1)->get();
      $sdcarddata = MST_PRODUCT::where('type_id',2)->get();
      $osdata = MST_PRODUCT::where('type_id',3)->get();
      return view('product',["os"=>$osdata,"raspi"=>$raspidata,"sdcard"=>$sdcarddata]);
    }

}
