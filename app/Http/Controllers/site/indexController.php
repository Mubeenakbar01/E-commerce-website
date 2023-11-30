<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function OpenHome(){
        $products =product::all();
        return view('site.index', compact('products'));
    }
    public function productDetail(){
        return view('site.product_detail');
    }
    public function openCart(){
        return view('site.cart');
    }
    public function openCheckout(){
        return view('site.checkout');
    }
    public function openAddToCart(Request $request){
        return $request->product_id;
    }
}
