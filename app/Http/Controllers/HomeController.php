<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = customer::find(1)->passport;
        return view('home',compact('customer'));
    }
}
