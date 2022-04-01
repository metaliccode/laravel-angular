<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    $products = Product::all();
    return response()->json(['message' => 'Sukses', 'data' => $products], 200);
    }

    public function tes(){
        return 'TES';
    }
}
