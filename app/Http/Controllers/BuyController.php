<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Service\CartService;
use App\Service\BuyService;

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
        $buy = new BuyService();
        $id  = Carbon::now()->timestamp;
        $buy->addBuy($request,$id);

        return redirect('/buy/success')->with('SalesId',$id);
    }

    public function success(){
        $id = session('SalesId');
        return view('buysuccess',compact('id'));
    }
}
