<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Braintree\Gateway;
use App\Order;
use App\Http\Requests\OrderRequest;
use App\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generate(Request $request,Gateway $gateway){

        $token = $gateway->clientToken()->generate();

       /*  $token = 'sandbox_csryh9w7_jcvymfwrf26rzh7c'; */

        $data = [

            'token' => $token

        ];

        return response()->json($data, 200);

    }

    public function makePayment(OrderRequest $request,Gateway $gateway){
        
        $prezzoTot = $request->prezzoTot;

        $result = $gateway->transaction()->sale([

            'amount' => $prezzoTot,
            'paymentMethodNonce' => $request->token,
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
    public function saveOrder(Request $request){

        $clientName = $request->clientName;
        $clientPhone = $request->clientPhone;
        $clientEmail = $request->clientEmail;
        $clientAdress = $request->clientAdress;
        $clientDetails = $request->clientDetails;
        $prezzoTot = $request->prezzoTot;
        $codice_transazione = $request->codice_transazione;
        $pagato = $request->pagato;

        $data = [

        'clientName' => $clientName,
        'clientPhone' => $clientPhone,
        'clientEmail' => $clientEmail,
        'clientAdress' => $clientAdress,
        'clientDetails' => $clientDetails,
        'prezzoTot' => $prezzoTot,
        'codice_transazione' => $codice_transazione,
        'pagato' => $pagato

        ];
        //     DB::table('orders')->insert(array(
        //     array('nome' => $clientName),
        //     array('telefono' => $clientPhone),
        //     array('email' => $clientEmail),
        //     array('indirizzo' => $clientAdress),
        //     array('dettaglio' => $clientDetails),
        //     array('totale' => $prezzoTot),
            
        // ));
        // Order::new'nome',
        // 'indirizzo',
        // 'dettaglio',
        // 'codice_transazione',
        // 'totale',
        // 'email',
        // 'telefono',
        // 'pagato'
        $new_order = new Order();
            $new_order->nome = $clientName;
            $new_order->telefono = $clientPhone;
            $new_order->email = $clientEmail;
            $new_order->indirizzo = $clientAdress;
            $new_order->dettaglio = $clientDetails;
            $new_order->totale = $prezzoTot;
            
            $new_order->codice_transazione = $codice_transazione;
            $new_order->pagato = $pagato;

            $new_order->save();
            
        return response()->json($data,200);
 

        // $table->string('codice_transazione', 30);
        // $table->boolean('pagato')->nullable();


    }

}
