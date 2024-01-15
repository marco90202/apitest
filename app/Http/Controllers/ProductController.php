<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request){
        return new ProductCollection(Product::all());
    }

    public function show(Request $request, Product $product){
        return new ProductResource($product);
    }
}
