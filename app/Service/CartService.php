<?php
namespace App\Service;

use Illuminate\Support\Facades\DB;

class CartService
{

    private $allsumprice = 0;

    public function addItem($id){

    }
    public function clear(){

    }
    public function removeItem($index){
        session()->forget("items.$index"); //sessionから選んだ商品を削除。例えば$items[0]の削除は items.0 と指定できる。
    }
    public function getItems(){
        $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列
        return $items;
    }

    public function getItem(){
        $cartarray = [];
        $cart = session()->get('cart');
        $allsumprice = 0;

        if (!empty($cart)) {
            foreach ($cart as $key => $value) {
                $sumprice[$key] = 0;
                $cart[$key]['raspi']  = MST_PRODUCT::find($cart[$key]['raspi']);
                $cart[$key]['os']     = MST_PRODUCT::find($cart[$key]['os']);
                $cart[$key]['sdcard'] = MST_PRODUCT::find($cart[$key]['sdcard']);
                foreach ($cart[$key] as $innerkey => $innervalue){
                    $allsumprice += $innervalue->price;
                    $sumprice[$key]    += $innervalue->price;
                }
            }
        }

        $cartarray[] = $cart;
        $cartarray[] = $sumprice;
        $cartarray[] = $allsumprice;

        return $cartarray;
    }

}