<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Products::all();
        return view('products.index', ['products' => $products]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function success()
    {
        return view('success');
    }

    public function contact()
    {
        return view('contact');
    }
}
