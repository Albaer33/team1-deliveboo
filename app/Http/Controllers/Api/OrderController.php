<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Braintree\Gateway;
use App\Order;
use App\Http\Requests\OrderRequest;
use App\Dish;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generate(Request $request,Gateway $gateway){

        /* $token = $gateway->clientToken()->generate(); */

        $token = 'sandbox_csryh9w7_jcvymfwrf26rzh7c';

        $data = [

            'token' => $token

        ];

        return response()->json($data, 200);

    }

    public function makePayment(OrderRequest $request,Gateway $gateway){
        
        $prezzoTot = $request->prezzoTot;

        $result = $gateway->transaction()->sale([

            'amount' => $prezzoTot,
            'paymentMethodNonce' => "fake-valid-nonce",
            'options' => [

                'submitForSettlement' => true

            ]
        ]);
        
        if($result->success){

            $data = [

                'prezzoTot'=> $prezzoTot,
                'success' => true,
                'message' => 'Transazione eseguita con Successo!',


            ];

            return response()->json($data,200);

        }else{

            $data = [

                'success' => true,
                'message' => 'Transazione eseguita con Successo Si!'

            ];

            return response()->json($data,200);

        }
        
    }

}
