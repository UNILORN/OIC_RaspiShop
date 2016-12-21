<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\BuyService;

class AdminController extends Controller
{
    public function index()
    {
        if (!session()->get('admin')) {
            return redirect('/admin/check');
        }
        $sales = new BuyService();
        $sales = $sales->getBuy();
        $sales = $sales->paginate(5);
        return view('admin', compact('sales'));
    }

    public function check()
    {
        return view('admin_check');
    }

    public function store(Request $request)
    {
        if (config('content.AdminPass') == $request->input('pass')) {
            session()->put('admin', 1);
            return redirect('/admin');
        }
        return redirect('/');
    }

    public function logout(){
        session()->put('admin', 0);
        return redirect('/');
    }
}

