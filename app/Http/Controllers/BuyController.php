<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\CartService;
use App\MST_SALES_DETAILS;
use App\MST_SALES;
use Carbon\Carbon;

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
        $c_cart   = new CartService();
        $cart     = $c_cart->getItem();
        $sumprice = $c_cart->getAllPrice();
        $id       = Carbon::now()->timestamp . rand(100,999);

        MST_SALES::insert([
            'id'        => $id,
            'sum_price' => $sumprice,
            'name'      => $request->input('name'),
            'sex'       => $request->input('sex'),
            'post_num'  => $request->input('post_num'),
            'address'   => $request->input('address'),
            'email'     => $request->input('email')
        ]);

        foreach ($cart as $cart_num){
            foreach ($cart_num as $value){
                MST_SALES_DETAILS::insert([
                    'sales_id' => $id,
                    'product_id' => $value->id,
                    'price' => $value->price
                ]);
            }
        }

        $c_cart->deleteItem();
        return redirect('/buy/success')->with('SalesId',$id);
    }

    public function success(){
        $id = session('SalesId');
        return view('buysuccess',compact('id'));
    }
}
