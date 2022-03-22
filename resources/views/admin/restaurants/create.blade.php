@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Registra il tuo ristorante</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form action="{{route('admin.restaurants.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <div class="mb-3">
              <label for="nome_attivita" class="form-label">Nome Ristorante</label>
              <input type="text" class="form-control" id="nome_attivita" name="nome_attivita" value="{{old('nome_attivita')}}">
            </div>

            <div class="mb-3">
                <label for="P_IVA" class="form-label">Partita IVA</label>
                <input type="text" class="form-control" id="P_IVA" name="P_IVA" value="{{old('P_IVA')}}">
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}">
            </div>

            <div class="mb-3">
                <label for="indirizzo" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" id="indirizzo" name="indirizzo" value="{{old('indirizzo')}}">
            </div>

            <div class="mb-3">
                <label for="immagine" class="form-label">Immagine</label>
                <input type="file" id="immagine" name="immagine">
            </div>

            <button type="submit" class="btn btn-primary">Registra ristorante</button>

        </form>
    </section>
@endsection