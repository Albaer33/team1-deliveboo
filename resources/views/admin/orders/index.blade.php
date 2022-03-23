@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            @foreach ($orders as $order)
                <div>{{$order}}</div>
            @endforeach
        </div>
    </section>
@endsection