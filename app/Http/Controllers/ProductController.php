<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MST_PRODUCT;
use App\MST_COMPANY;
use App\Service\CartService;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $raspi = MST_PRODUCT::where('type_id', 1)->get();
        $sdcard = MST_PRODUCT::where('type_id', 2)->get();
        $os = MST_PRODUCT::where('type_id', 3)->get();

        $c_cart = new CartService();
        $cart        = $c_cart->getItem();
        $allsumprice = $c_cart->getAllPrice();
        $sumprice    = $c_cart->getPrice();

        return view('product', compact('raspi', 'sdcard', 'os', 'request', 'cart' , 'allsumprice', 'sumprice'));
    }

}
