<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return to_route('act14.main')->with([
            'uid' => $request->uid,
            'you' => User::all()->find($request->uid),
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = new Cart();
        $product = Product::all()->find($request->product_id);

        $cart->name = $product->name;
        $cart->price = $product->price;
        $cart->user_id = $request->uid;
        $cart->product_id = $request->product_id;
        $cart->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart, Request $request)
    {
        $uid = $request->uid;
        return User::find($uid)->carts;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
