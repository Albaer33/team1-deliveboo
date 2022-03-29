<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tipology;
class TipologyController extends Controller
{
    public function index()
    {
        // prendo i ristoranti dal model   
        $tipologies= Tipology::all();
        
        // rimando i dati a json per vue, controllo tramite postman
        // return response()->json($restaurants);
            // return response()->json([
            //     'success' => true,
            //     'results' => $restaurants
            // ]);
            if($tipologies) {
                return response()->json([
            'success' => true,
            'results' => $tipologies,
        ]);
        }else {
            
            return response()->json([
                'success' => false,
                'results' => [],

                
            ]);
        }
    }
    public function show($slug){
        // http://127.0.0.1:8000/api/tags/cultura
        // dd($slug);
        // USO WITH PER AGGIUNGERE RELAZIONI ALLA API
        $tipologies = Tipology::where('slug', '=', $slug)->with(['restaurants'])->first();
        
        if($tipologies){
            return response()->json([
                // ATTENZIONE ALLA SINTASSI!!!
                'success' => true,
                'results' => $tipologies
            ]);
        }else{
            return response()->json([
                // ATTENZIONE ALLA SINTASSI!!!
                'success' => false,
                'results' => []
            ]);
        }
        
    }
}
