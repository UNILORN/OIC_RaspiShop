<?php
namespace App\Service;

use App\MST_SALES_DETAILS;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\MST_SALES;

class BuyService
{

    public function addBuy($request,$id,$user_id)
    {

        $c_cart    = new CartService();
        $cart      = $c_cart->getItem();
        $sumprice  = $c_cart->getAllPrice();

        if(empty($user_id)){
           $user_id = NULL;
        }
        MST_SALES::insert([
            'id'         => $id,
            'sum_price'  => $sumprice,
            'name'       => $request->input('name'),
            'sex'        => $request->input('sex'),
            'post_num'   => $request->input('post_num'),
            'address'    => $request->input('address'),
            'email'      => $request->input('email'),
            'created_at' => Carbon::now(),
            'user_id'    => $user_id

        ]);

        foreach ($cart as $cart_num) {
            foreach ($cart_num as $value) {
                MST_SALES_DETAILS::insert([
                    'sales_id'   => $id,
                    'product_id' => $value->id,
                    'price'      => $value->price
                ]);
            }
        }

        $c_cart->deleteItem();

    }

    public function getBuy()
    {
        $sales = MST_SALES::with('Detail')->orderBy('created_at','desc');
        return $sales;
    }

}