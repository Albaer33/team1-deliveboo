@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>{{$order->nome}}</h1>

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
        
{{--             <form action="{{route('admin.dishes.destroy',['order'=>$order->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Cancella</button>
            </form> --}}

        </div>
    </section>
@endsection