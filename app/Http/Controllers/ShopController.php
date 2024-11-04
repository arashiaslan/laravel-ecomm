<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Products::orderBy('created_at','DESC')->paginate(12);
        return view('shop',compact('products'));
    }

    public function product_details($product_slug){
        $product = Products::where('slug',$product_slug)->first();
        $rproducts = Products::where('slug','<>',$product_slug)->get()->take(8);
        return view('detail',compact('product','rproducts'));
    }
}
