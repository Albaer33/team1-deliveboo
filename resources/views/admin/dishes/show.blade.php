@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>{{$dish->nome}}</h1>

            <div class="mb-2"><strong>Slug:</strong> {{$dish->slug}}</div>

            <p>{{$dish->descrizione}}</p>
            
            <a href="{{ route('admin.dishes.edit', ['dish'=>$dish->id]) }}">Modifica piatto</a>
        
            <form action="{{route('admin.dishes.destroy',['dish'=>$dish->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Cancella piatto</button>
            </form>

        </div>
    </section>
@endsection