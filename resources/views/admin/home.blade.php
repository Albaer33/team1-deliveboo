@extends('layouts.dashboard')

@section('title')
Home
@endsection

@section('content')
    <section>
        <div class="container">
            <h1 class="title-c">{{$user->name}} benvenuto nell'area riservata </h1>
        </div>
    </section>
@endsection