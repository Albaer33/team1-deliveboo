@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($orders as $order)
                    <div class="card">

                        <div class="card-body">

                            <h5 class="card-title">Nome: {{$order->nome}}</h5>

                            <div class="indirizzo">Indirizzo: {{$order->indirizzo}}</div>

                            <div class="dettaglio">Dettagli: {{$order->dettaglio}}</div>

                            <div class="codice_transazione">Codice Transazione: {{$order->codice_transazione}}</div>
                            
                            <div class="totale">Totale: €{{$order->totale}}</div>

                            <div class="email">Email: {{$order->email}}</div>

                            <div class="telefono">Telefono: {{$order->telefono}}</div>

                            @if ($order->pagato === 1)

                                <div class="pagato">Status: Pagato</div>
                                
                            @else

                            <div class="non-pagato">Status: Non pagato</div>
                                
                            @endif

                            <a href="{{route('admin.orders.show',['order' => $order->id])}}" class="btn btn_ms_primary_color">Dettagli</a>

                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </section>
@endsection