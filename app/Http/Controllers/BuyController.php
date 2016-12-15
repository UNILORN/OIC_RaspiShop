<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\CartService;
use App\MST_SALES_DETAILS;
use App\MST_SALES;

class BuyController extends Controller
{
    // 購入確認ページ
    public function index(){

        $c_cart = new CartService();
        $cart        = $c_cart->getItem();
        $allsumprice = $c_cart->getAllPrice();

        return view('buy',compact('cart','allsumprice'));
    }

    // 購入処理
    public function store(Request $request){
        $c_cart = new CartService();
        $cart        = $c_cart->getItem();

        MST_SALES::insert([

        ]);
        redirect('/buy/success');
    }

    public function success(){

    }
}
