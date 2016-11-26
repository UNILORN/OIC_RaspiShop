<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MST_PRODUCT;

class CartController extends Controller
{

    public function index()
    {
      $cart = session()->get('cart');
      if(!empty($cart)){
        foreach($cart as $key => $value){
          $cart[$key]['raspi']  = MST_PRODUCT::find($cart[$key]['raspi']);
          $cart[$key]['os']     = MST_PRODUCT::find($cart[$key]['os']);
          $cart[$key]['sdcard'] = MST_PRODUCT::find($cart[$key]['sdcard']);
        }
      }

      return view('cart',compact('cart'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $cartitem = [];
      if(!empty(session()->get('cart'))){
        $cartitem = session()->get('cart');
      }
      $cartitem[] = [
        'raspi'   => $request->input('raspi'),
        'os'      => $request->input('os'),
        'sdcard'  => $request->input('sdcard')
      ];
      session()->put('cart',$cartitem);

      return redirect('/cart');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
