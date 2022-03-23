@extends('layouts.dashboard')

@section('content')

@if ( ( !isset($user->createdRestaurants ) ) && ( $user->createdRestaurants ) === null )
    <section>
        <h2>Registra il tuo ristorante</h2>

        <form action="{{route('admin.restaurants.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <div class="mb-3">
              <label for="nome_attivita" class="form-label">Nome Ristorante</label>
              <input type="text" class="form-control" id="nome_attivita" name="nome_attivita" value="{{old('nome_attivita')}}">
            </div>

            @error('nome_attivita')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="P_IVA" class="form-label">Partita IVA</label>
                <input type="text" class="form-control" id="P_IVA" name="P_IVA" value="{{old('P_IVA')}}">
            </div>

            @error('P_IVA')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}">
            </div>

            @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="indirizzo" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" id="indirizzo" name="indirizzo" value="{{old('indirizzo')}}">
            </div>

            @error('indirizzo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <h4>Tipologie</h4>
                @foreach ($tipologies as $tipology)
                    <div class="form-check">
                        <input {{ in_array($tipology->id, old('tipologies', [])) ? 'checked' : '' }} class="form-check-input" name="tipologies[]" type="checkbox" value="{{ $tipology->id }}" id="tipologies-{{ $tipology->id }}">
                        <label class="form-check-label" for="tipologies-{{ $tipology->id }}">
                            {{ $tipology->nome }}
                        </label>
                    </div>
                @endforeach
            </div>

            @error('tipologies')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="immagine" class="form-label">Immagine</label>
                <input type="file" id="immagine" name="immagine">
            </div>

            @error('immagine')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Registra ristorante</button>

        </form>
    </section>

@else

<section>
    <h2>Hai gia un ristorante</h2>

    <div class="card-body">

        <a href="{{route('admin.restaurants.show',['restaurant'=>$restaurant->id])}}" class="btn btn-primary">Dettagli</a>
        <a href="{{ route('admin.restaurants.edit', ['restaurant'=>$restaurant->id]) }}"><button class="btn btn-primary">Modifica ristorante</button></a>
    
    </div>

    <form action="" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')

        <div class="mb-3">
          <label for="nome_attivita" class="form-label">Nome Ristorante</label>
          <input type="text" class="form-control" id="nome_attivita" name="nome_attivita" value="{{old('nome_attivita')}}" disabled="disabled">
        </div>

        <div class="mb-3">
            <label for="P_IVA" class="form-label">Partita IVA</label>
            <input type="text" class="form-control" id="P_IVA" name="P_IVA" value="{{old('P_IVA')}}" disabled="disabled">
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" disabled="disabled">
        </div>

        <div class="mb-3">
            <label for="indirizzo" class="form-label">Indirizzo</label>
            <input type="text" class="form-control" id="indirizzo" name="indirizzo" value="{{old('indirizzo')}}" disabled="disabled">
        </div>

        <div class="mb-3">
            <label for="immagine" class="form-label">Immagine</label>
            <input type="file" id="immagine" name="immagine" disabled="disabled">
        </div>

        <button type="submit" class="btn btn-primary" disabled="disabled" >Registra ristorante</button>

    </form>
</section>      
            
@endif
@endsection