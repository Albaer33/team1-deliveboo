@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($restaurants as $restaurant)
                    <div class="card">

                        @if ($restaurant->immagine)
                            <div>
                                <img src="{{ asset('storage/' . $restaurant->immagine) }}" alt="{{ $restaurant->nome_attivita }}">
                            </div>
                        @endif

                        <h1>{{$restaurant->nome_attivita}}</h1>
                        
                        <div class="card-body">

                            <a href="{{route('admin.restaurants.show',['restaurant'=>$restaurant->id])}}" class="btn btn_ms_primary_color">Dettagli</a>
                            <a href="{{ route('admin.restaurants.edit', ['restaurant'=>$restaurant->id]) }}"><button class="btn btn_ms_primary_color">Modifica ristorante</button></a>
                        
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </section>
@endsection