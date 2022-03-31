<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index(Request $request){

        $products = Dish::all();

        return ProductResource::collection($products);

    }
}
