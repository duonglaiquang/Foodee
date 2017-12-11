<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Product::where('category', '=', 'Food')
            ->take(4)->get();

        $drinks = Product::where('category', '=', 'Drink')
            ->take(4)->get();

        return view('sites.home', compact('foods', 'drinks'));
    }
}
