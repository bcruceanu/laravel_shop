<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Products::all();
        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Products::find($id);
        return view('products.show', ['product' => $product]);
    }

    public function edit($id)
    {
        $product = Products::find($id);
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('products.index');
    }

    public function addToCart($id)
    {
        $product = Products::find($id);
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "description" => $product->description,
                        "price" => $product->price,
                        "photo" => $product->picture_url
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->route('products.index');
        }

        $cart[$id] = [
            "name" => $product->name,
            "description" => $product->description,
            "price" => $product->price,
            "photo" => $product->picture_url
        ];
        session()->put('cart', $cart);
        return redirect()->route('products.index');
    }
}
