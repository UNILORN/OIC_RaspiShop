<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartForm;
use Illuminate\Http\Request;
use App\MST_PRODUCT;
use App\Service\CartService;

class CartController extends Controller
{

    public function index()
    {
        $c_cart = new CartService();
        $cart        = $c_cart->getItem();
        $allsumprice = $c_cart->getAllPrice();
        $sumprice    = $c_cart->getPrice();

        return view('cart', compact('cart','allsumprice','sumprice'));
    }

    public function create()
    {
        //
    }

    public function store(CartForm $request)
    {
        $c_cart = new CartService();
        $c_cart->storeItem($request);

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
        $c_cart = new CartService();
        $c_cart->destroyItem($id);

        return redirect('/cart');
    }
}
