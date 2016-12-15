<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MST_SALES;
use App\MST_SALES_DETAILS;

class AdminController extends Controller
{
    public function index(){
        $sales = MST_SALES::with('Detail')->orderBy('created_at','desc')->paginate(10);

        return view('admin',compact('sales'));
    }
}
