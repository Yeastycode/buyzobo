<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
    /**
     * Checkout
     *
     * @return void
     */
    public function checkout()
    {
        return view('checkout');
    }

    /**
     * Shopping Cart
     *
     * @return void
     */
    public function cart()
    {
        return view('cart');
    }
}
