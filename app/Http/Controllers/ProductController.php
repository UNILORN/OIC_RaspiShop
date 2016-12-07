<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MST_PRODUCT;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $raspi = MST_PRODUCT::where('type_id', 1)->get();
        $sdcard = MST_PRODUCT::where('type_id', 2)->get();
        $os = MST_PRODUCT::where('type_id', 3)->get();

        $cart = session()->get('cart');
        $allsumprice = 0;
        $sumprice = [];
        if (!empty($cart)) {
            foreach ($cart as $key => $value) {
                $sumprice[$key] = 0;
                $cart[$key]['raspi'] = MST_PRODUCT::find($cart[$key]['raspi']);
                $cart[$key]['os'] = MST_PRODUCT::find($cart[$key]['os']);
                $cart[$key]['sdcard'] = MST_PRODUCT::find($cart[$key]['sdcard']);
                foreach ($cart[$key] as $innerkey => $innervalue){
                    $allsumprice += $innervalue->price;
                    $sumprice[$key]    += $innervalue->price;
                }

            }
        }


        return view('product', compact('raspi', 'sdcard', 'os', 'request', 'cart' , 'allsumprice', 'sumprice'));
    }

}
