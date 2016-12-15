<?php
namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\MST_PRODUCT;

class CartService
{

    private $allsumprice = 0;
    private $sumprice = [];


    public function getAllPrice()
    {
        return $this->allsumprice;
    }

    public function getPrice()
    {
        return $this->sumprice;
    }

    public function getItem()
    {
        $cart = session()->get('cart');
        $this->allsumprice = 0;

        if (!empty($cart)) {
            foreach ($cart as $key => $value) {
                $this->sumprice[$key] = 0;
                $cart[$key]['raspi']  = MST_PRODUCT::find($cart[$key]['raspi']);
                $cart[$key]['os']     = MST_PRODUCT::find($cart[$key]['os']);
                $cart[$key]['sdcard'] = MST_PRODUCT::find($cart[$key]['sdcard']);
                foreach ($cart[$key] as $innerkey => $innervalue) {
                    $this->allsumprice    += $innervalue->price;
                    $this->sumprice[$key] += $innervalue->price;
                }
            }
        } else {
            $cart = [];
        }

        return $cart;
    }

    public function storeItem($request)
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

    }

    public function destroyItem($id)
    {
        session()->forget("cart.$id");
    }

}