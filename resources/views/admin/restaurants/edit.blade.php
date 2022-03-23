@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Modifica Ristorante</h2>

        <form action="{{route('admin.restaurants.update', ['restaurant' => $restaurants->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="nome_attivita" class="form-label">Nome Ristorante</label>
              <input type="text" class="form-control" id="nome_attivita" name="nome_attivita" value="{{old('nome_attivita', $restaurants->nome_attivita)}}">
            </div>

            @error('nome_attivita')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="P_IVA" class="form-label">Partita IVA</label>
                <input type="text" class="form-control" id="P_IVA" name="P_IVA" value="{{old('P_IVA',$restaurants->P_IVA)}}">
            </div>

            @error('P_IVA')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono',$restaurants->telefono)}}">
            </div>

            @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="indirizzo" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" id="indirizzo" name="indirizzo" value="{{old('indirizzo',$restaurants->indirizzo)}}">
            </div>

            @error('indirizzo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="immagine" class="form-label">Immagine</label>
                <input type="file" id="immagine" name="immagine">
            </div>

            @error('immagine')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <h4>Tipologie</h4>

                @foreach ($tipologies as $tipology)

                    <div class="form-check">
                        @if ($errors->any())
                            {{-- Se ci sono errori di validazione, decido se mettere checked o meno in base a old() --}}
                            <input {{ in_array($tipology->id, old('tipologies', [])) ? 'checked' : '' }} class="form-check-input" type="checkbox" name="tipologies[]" value="{{ $tipology->id }}" id="tipologies-{{ $tipology->id }}">
                        @else
                            {{-- Atrimenti se non ci sono errori di validazione, decido se mettere checked o meno in base a $restaurants->tipologies->contains --}}
                            <input {{ $restaurants->tipologies->contains($tipology) ? 'checked' : '' }} class="form-check-input" type="checkbox" name="tipologies[]" value="{{ $tipology->id }}" id="tipologies-{{ $tipology->id }}">
                        @endif
                        
                        <label class="form-check-label" for="tipologies-{{ $tipology->id }}">
                        {{ $tipology->nome }}
                        </label>
                    </div>
                @endforeach
            </div>

            @if ($restaurants->immagine)
                <div class="current-image">
                    Immagine attuale:
                    <img src="{{ asset('storage/' . $restaurants->immagine) }}" alt="">
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Modifica Ristorante</button>

          </form>
    </section>
@endsection