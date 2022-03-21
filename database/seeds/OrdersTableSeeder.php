<?php

use App\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [

            [

                'nome' => 'Mario Rossi',
                'indirizzo' => 'Roma centro',
                'dettaglio' => 'Ao voglio la pizza',
                'codice_transazione' => '159HKS75',
                'totale' => '584',
                'email' => 'aosoderoma@gmail.com',
                'telefono' => '123456789',
                'pagato' => true,
    
            ],
    
            [
    
                'nome' => 'Luigi Verdi',
                'indirizzo' => 'Napoli',
                'dettaglio' => 'ok',
                'codice_transazione' => '753HKS15',
                'totale' => '162',
                'email' => 'ok@mail.com',
                'telefono' => '789456123',
                'pagato' => true,
    
            ],

        ];

        foreach ($orders as $order) {
            
            $new_order = new Order();
            $new_order->nome = $order['nome'];
            $new_order->indirizzo = $order['indirizzo'];
            $new_order->dettaglio = $order['dettaglio'];
            $new_order->codice_transazione = $order['codice_transazione'];
            $new_order->totale = $order['totale'];
            $new_order->email = $order['email'];
            $new_order->telefono = $order['telefono'];
            $new_order->pagato = $order['pagato'];
            $new_order->save();

        }
    }
}

/*

            $table->string('nome', 25);
            $table->string('indirizzo', 50);
            $table->text('dettaglio');
            $table->string('codice_transazione', 30);
            $table->decimal('totale', 5, 2);
            $table->string('email', 30);
            $table->string('telefono', 15);
            $table->boolean('pagato')->nullable();

*/
