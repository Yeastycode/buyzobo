<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    /**
     * Products
     *
     * @return view
     */
    public function index()
    {
        return view('products');
    }

    /**
     * Single Product
     *
     * @param string $id The id of the product
     *
     * @return void
     */
    public function productPreview($id)
    {
        return view('single-product');
    }
}
