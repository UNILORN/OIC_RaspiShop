<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\BuyService;

class AdminController extends Controller
{
    public function index(){
        $sales = new BuyService();
        $sales = $sales->getBuy();
        $sales = $sales->paginate(5);
        return view('admin',compact('sales'));
    }
}
