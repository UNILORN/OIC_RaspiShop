<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    // 購入確認ページ
    public function index(){

        return view('buy',compact(''));
    }

    // 購入処理
    public function store(Request $request){

    }
}
