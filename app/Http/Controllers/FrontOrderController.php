<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontOrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.order.index');
    }
    public  function show($i){
        return view('frontend.order.show', array('index'=>$i));
    }
}
