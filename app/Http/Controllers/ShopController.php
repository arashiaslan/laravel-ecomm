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
}
