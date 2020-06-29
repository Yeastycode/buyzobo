<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Products
     *
     * @return view
     */
    public function index()
    {
        return $this->view('products');
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


    /**
     * Log out user
     *
     * @return void
     */
    public function signOut()
    {
        Auth::logout();

        return redirect()->to(route('buy'));
    }
}
