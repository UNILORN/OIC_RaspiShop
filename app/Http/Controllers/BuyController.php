<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Service\CartService;
use App\Service\BuyService;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    // 購入確認ページ
    public function index(){
        if(!Auth::check()){
            return redirect('/login');
        }
        $c_cart = new CartService();
        $cart        = $c_cart->getItem();
        $allsumprice = $c_cart->getAllPrice();
        $user = Auth::user();
        return view('buy',compact('cart','allsumprice','user'));
    }

    // 購入処理
    public function store(Request $request){
        $buy = new BuyService();
        $id  = Carbon::now()->timestamp;

        $user_id = Auth::user()->id;

        $buy->addBuy($request,$id,$user_id);

        return redirect('/buy/success')->with('SalesId',$id);
    }

    public function success(){
        $id = session('SalesId');
        return view('buysuccess',compact('id'));
    }
}
