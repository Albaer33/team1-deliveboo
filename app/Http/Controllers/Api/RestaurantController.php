<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Tipology;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // prendo i ristoranti dal model   
        $restaurants = Restaurant::all();
    
    // rimando i dati a json per vue, controllo tramite postman
    // return response()->json($restaurants);
        // return response()->json([
        //     'success' => true,
        //     'results' => $restaurants
        // ]);
        if($restaurants) {
            return response()->json([
        'success' => true,
        'results' => $restaurants,
    ]);
    }else {
        
        return response()->json([
            'success' => false,
            'results' => [],

            
        ]);
    }
    }

    public function show($slug) {
        // test per vedere lo slug
        // dd($slug);
        // con with vado a selezionare gli attributi category e tags di post !!! CONTROLLARE LA CHIAMATA API CON POSTMAN
        $restaurant = Restaurant::where('slug', '=', $slug)->with(['dishes', 'tipologies'])->first();
        
        
        // risposta a json per vue questa soluzione è insufficiente se l'end url non è corretto e punta un elemento che non esiste nel database
        // return response()->json([
        //     'success' => true,
        //     'results' => $post
        // ]);
        // creo un condizionale
        if($restaurant) {
                return response()->json([
            'success' => true,
            // modifico results per recuperare i dati delle tags e delle categorie ma posso inserire gli elementi direttamente quando chiamo il model
            // 'results' => [
            //    'restau$restaurant' => $restaurant,
            //    'tags' => $restaurant->tags,
            //    'category' => $restaurant->category
            // ]
            'results' => $restaurant
        ]);
        }else {
            // nel caso non esista rimandiamo un array vuoto
            return response()->json([
                'success' => false,
                'results' => []
                // potremmo anche non mettere l'array
            ]);
        }
    }
}
