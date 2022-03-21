@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($dishes as $dish)
                    <div class="card">
                        <img src="{{$dish->immagine}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$dish->nome}}</h5>
                            {{-- <p class="card-text">{{$dish->descrizione}}</p> --}}
                            <div class="price">€{{$dish->prezzo}}</div>
                            
                            @if ($dish->visibile === 1)
                            
                                <div class="visible">Visibile</div>

                            @else

                                <div class="visible">Non visibile</div>
                                
                            @endif

                            <a href="{{route('admin.dishes.show',['dish'=>$dish->id])}}" class="btn btn-primary">Dettagli</a>
                            <a href="{{ route('admin.dishes.edit', ['dish'=>$dish->id]) }}"><button class="btn btn-primary">Modifica piatto</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </section>
@endsection