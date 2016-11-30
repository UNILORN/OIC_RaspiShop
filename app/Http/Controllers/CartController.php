<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartForm;
use Illuminate\Http\Request;
use App\MST_PRODUCT;

class CartController extends Controller
{

    public function index()
    {
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

        return view('cart', compact('cart','allsumprice','sumprice'));
    }

    public function create()
    {
        //
    }

    public function store(CartForm $request)
    {
        $cartitem = [];
        if (!empty(session()->get('cart'))) {
            $cartitem = session()->get('cart');
        }
        $cartitem[] = [
            'raspi' => $request->input('raspi'),
            'os' => $request->input('os'),
            'sdcard' => $request->input('sdcard')
        ];
        session()->put('cart', $cartitem);

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
