<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\BuyService;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index(){
        $sales = new BuyService();
        $sales = $sales->getBuy();
        $sales = $sales->User(Auth::user()->id)->get();

        return view('mypage',compact('sales'));
    }
}
