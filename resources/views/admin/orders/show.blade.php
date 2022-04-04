@extends('layouts.dashboard')

@section('title')
Un ordine specifico
@endsection

@section('content')
    <section>
        <div class="container">
            <div class=" ">

                <h1>{{$order->nome}}</h1>
    
                <h2 class="indirizzo">Indirizzo: {{$order->indirizzo}}</h2>
    
                <h2 class="dettaglio">Dettagli: {{$order->dettaglio}}</h2>
                <h2>Codice Transazione:</h2>
                <p class="codice_transazione w-50 h-150 overflow-auto">{{$order->codice_transazione}}</p>
                                
                <h2 class="totale">Totale: €{{$order->totale}}</h2>
    
                <h2 class="email">Email: {{$order->email}}</h2>
    
                <h2 class="telefono">Telefono: {{$order->telefono}}</h2>
    
                @if ($order->pagato === 1)
    
                    <h2 class="pagato">Status: Pagato</h2>
                                    
                @else
    
                    <h2 class="non-pagato">Status: Non pagato</h2>
                                    
                @endif
            
    {{--             <form action="{{route('admin.dishes.destroy',['order'=>$order->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Cancella</button>
                </form> --}}
            </div>

        </div>
    </section>
@endsection