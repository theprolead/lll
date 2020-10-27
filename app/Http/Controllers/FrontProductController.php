<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontProductController extends Controller
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
        return view('frontend.product.index');
    }
    public  function show($i){
        return view('frontend.product.show', array('index'=>$i));
    }
}
