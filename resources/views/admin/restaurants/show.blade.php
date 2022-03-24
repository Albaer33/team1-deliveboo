@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>{{$restaurants->nome_attivita}}</h1>

            <div>{{$restaurants->P_IVA}}</div>

            <div>{{$restaurants->telefono}}</div>

            <div>{{$restaurants->indirizzo}}</div>

            @if ($restaurants->immagine)
                <div>
                    <img src="{{ asset('storage/' . $restaurants->immagine) }}" alt="{{ $restaurants->nome_attivita }}">
                </div>
            @endif
            
            
            <a href="{{ route('admin.restaurants.edit', ['restaurant' => $restaurants->id]) }}"><button class="btn btn_ms_primary_color">Modifica ristorante</button></a>
        
            <form action="{{route('admin.restaurants.destroy', ['restaurant'=>$restaurants->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Cancella ristorante</button>
            </form>

        </div>
    </section>
@endsection