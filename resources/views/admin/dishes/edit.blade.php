@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Modifica piatto</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form action="{{route('admin.dishes.update', ['dish'=>$dish->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome',$dish->nome)}}">
            </div>

            <div class="mb-3">
                <label for="categories_id" class="form-label">Categoria</label>
                <select class="form-select" id="categories_id" name="categories_id">
                    <option value="">Nessuna</option>
                    @foreach ($categories as $category)

                        <option value="{{ $category->id }}" {{ old('categories_id', $dish->categories_id) == $category->id ? 'selected' : '' }}>{{ $category->nome }}</option>

                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="prezzo" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="prezzo" name="prezzo" value="{{old('prezzo',$dish->prezzo)}}" placeholder="Prezzo in euro">
            </div>

            <div class="mb3">
                <label for="ingredienti" class="form-label">Ingredienti</label>   
                <textarea class="form-control" name="ingredienti" id="ingredienti" cols="30" rows="10">{{old('ingredienti', $dish->ingredienti)}}</textarea>
            </div>

            <div class="mb3">
                <label for="descrizione" class="form-label">Descrizione</label>   
                <textarea class="form-control" name="descrizione" id="descrizione" cols="30" rows="10">{{old('descrizione', $dish->descrizione)}}</textarea>
            </div>

            <div class="mb-3">
                <label for="immagine" class="form-label">Immagine</label>
                <input type="file" id="immagine" name="immagine">
            </div>

            @if ($dish->immagine)
                <div class="current-image">
                    Immagine attuale:
                    <img src="{{ asset('storage/' . $dish->immagine) }}" alt="">
                </div>
            @endif

            <div class="mb-3">
                <div class="form-check form-switch">
                    <input {{ $dish->visibile === 1 ? 'checked' : '' }} class="form-check-input" type="checkbox" id="visibile" name="visibile">
                    <label class="form-check-label" for="visibile">Rendi il piatto visibile</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Modifica piatto</button>

          </form>
    </section>
@endsection