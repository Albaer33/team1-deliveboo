<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        
        return response()->json([
            'success' => true,
            'results' => $restaurants
        ]);
    }

    public function show($id)
    {
        $restaurants = Restaurant::findOrFail($id);
    
    
        if($restaurants) {
                return response()->json([
            'success' => true,
            'results' => $restaurants
        ]);
        }else {
            
            return response()->json([
                'success' => false,
                'results' => []
                
            ]);
        }

    }
}
