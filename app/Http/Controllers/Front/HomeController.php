<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Frontend.index');
    }

    public function terms()
    {
        return view('Frontend.terms');
    }

    public function privacy()
    {
        return view('Frontend.privacy');
    }

    public function howItWork()
    {
        return view('Frontend.how_it_work');
    }

    public function donate()
    {
        $publicKey = env('STRIPE_KEY');
        return view('Frontend.donate', compact('publicKey'));
    }

    public function signIn()
    {
        return view('Frontend.Auth.login');
    }

    public function signUp()
    {
        return view('Frontend.Auth.register');
    }

    public function product()
    {
        return view('Frontend.Product.product');
    }

    public function productDetails()
    {
        return view('Frontend.Product.productDetails');
    }

    public function productCart()
    {
        return view('Frontend.Product.productCart');
    }

    public function marketPlace()
    {
        return view('Frontend.Marketplace.marketplace');
    }

    public function marketPlaceProduct()
    {
        return view('Frontend.Marketplace.productDetails');
    }
}
