@extends('layouts.dashboard')

@section('content')
    <section>

        <h1 class="title-c">Lista dei tuoi piatti</h1>

        <div class="container">


            <div class="row row-cols-3">

                @foreach ($dishes as $dish)
                    <div class="card">

                        @if ($dish->immagine)
                            <div>
                                <img src="{{ asset('storage/' . $dish->immagine) }}" alt="{{ $dish->nome }}">
                            </div>
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">{{$dish->nome}}</h5>
                            
                            <div class="price">€{{$dish->prezzo}}</div>
                            
                            @if ($dish->visibile === 1)
                            
                                <div class="visible">Visibile</div>

                            @else

                                <div class="visible">Non visibile</div>
                                
                            @endif

                            <a href="{{route('admin.dishes.show',['dish'=>$dish->id])}}" class="btn btn_ms_primary_color">Dettagli</a>
                            <a href="{{ route('admin.dishes.edit', ['dish'=>$dish->id]) }}"><button class="btn btn_ms_primary_color">Modifica piatto</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </section>
@endsection