@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>{{$dish->nome}}</h1>

            <div class="mb-2"><strong>Slug:</strong> {{$dish->slug}}</div>

            <div class="mb-2"><strong>Categoria:</strong> {{ $dish->categories_id ? $categories[$dish->categories_id - 1]['nome'] : 'Nessuna' }}</div>

            <p>Descrizione: {{$dish->descrizione}}</p>

            <div>€{{$dish->prezzo}}</div>

            <div>Ingredienti: {{$dish->ingredienti}}</div>

            @if ($dish->immagine)
                <div>
                    <img src="{{ asset('storage/' . $dish->immagine) }}" alt="{{ $dish->nome }}">
                </div>
            @endif
            
            @if ($dish->visibile === 1)
                            
                <div class="visible">Visibile</div>

            @else

                <div class="visible">Non visibile</div>
                
            @endif
            
            <a href="{{ route('admin.dishes.edit', ['dish'=>$dish->id]) }}"><button class="btn btn-primary">Modifica piatto</button></a>
        
            <form action="{{route('admin.dishes.destroy',['dish'=>$dish->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Cancella piatto</button>
            </form>

        </div>
    </section>
@endsection