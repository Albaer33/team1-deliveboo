@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Crea un nuovo piatto</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form action="{{route('admin.dishes.store')}}" method="post">
        @csrf
        @method('POST')

            <div class="mb-3">
              <label for="nome" class="form-label">Nome Piatto</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome')}}">
            </div>
            <div class="mb-3">
                <label for="prezzo" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="prezzo" name="prezzo" value="{{old('prezzo')}}" placeholder="Prezzo in euro">
            </div>
            <div class="mb-3">
                <label for="ingredienti" class="form-label">Ingredienti</label>
                <textarea class="form-control" name="ingredienti" id="ingredienti" cols="30" rows="10">{{old('ingredienti')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="descrizione" cols="30" rows="10">{{old('descrizione')}}</textarea>
            </div>
            {{-- 2 DU --}}
            {{-- <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image">
            </div> --}} 
            <div class="mb-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="visibile" name="visibile">
                    <label class="form-check-label" for="visibile">Rendi il piatto visibile</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Crea piatto</button>
        </form>
    </section>
@endsection