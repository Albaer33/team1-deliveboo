@extends('layouts.dashboard')

@section('title')
Il tuo Ristorante
@endsection

@section('content')
    <section>

        <div class="container">

            <h1 class="title-c">Il tuo ristorante</h1>

            <div class="card" style="width: 18rem;">

                @if ($restaurants->immagine)
                    <div>
                        <img src="{{ asset('storage/' . $restaurants->immagine) }}" alt="{{ $restaurants->nome_attivita }}">
                    </div>
                @endif


                <div class="card-body">

                    <h1 class="card-title">{{$restaurants->nome_attivita}}</h1>

                    <div>Partita IVA: {{$restaurants->P_IVA}}</div>

                    <div>Telefono: {{$restaurants->telefono}}</div>

                    <div>Indirizzo: {{$restaurants->indirizzo}}</div>

                    <div>Descrizione: {{$restaurants->descrizione}}</div>
                  
                    <a href="{{ route('admin.restaurants.edit', ['restaurant' => $restaurants->id]) }}"><button class="btn btn_ms_primary_color">Modifica ristorante</button></a>
                
                    <form action="{{route('admin.restaurants.destroy', ['restaurant'=>$restaurants->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Cancella ristorante</button>
                    </form>

                </div>

            </div>

        </div>
    </section>
@endsection