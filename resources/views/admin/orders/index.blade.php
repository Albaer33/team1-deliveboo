@extends('layouts.dashboard')

@section('title')
I tuoi ordini
@endsection

@section('content')
    <section>
        <h1 class="title-c">Storico Ordini</h1>
        {{-- {{dd($orders)}} --}}
        <div class="container">
            <table class="table">
                <thead class="table-primary table table-striped">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data</th>
                        <th scope="col">Nome:</th>
                        <th scope="col">Indirizzo:</th>
                        <th scope="col">Dettagli:</th>
                        <th scope="col">Codice Transazione:</th>
                        <th scope="col">Totale: €</th>
                        <th scope="col">Email:</th>
                        <th scope="col">Telefono:</th>
                        <th scope="col">Pagato:</th>
                    </tr>
                </thead>
                            <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{$order->id}}</th>
                                    <td>{{$order->updated_at->format('d-m-Y')}}</td>
                                    <td>{{$order->nome}}</td>
                                    <td>{{$order->indirizzo}}</td>
                                    <td>{{$order->dettaglio}}</td>
                                    <td>{{Str::substr($order->codice_transazione, 0 , 20)}}...</td>
                                    <td>{{$order->totale}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->telefono}}</td>
                                    @if ($order->pagato === 1)
                                        <td class="pagato">Si</td>
                                    @else
                                        <td class="non-pagato">No</td>
                                    @endif
                                    <td><a href="{{route('admin.orders.show',['order' => $order->id])}}" class="btn btn_ms_primary_color">Dettagli</a></td>
                                </tr>
                            @endforeach
                                </tbody>
                </table>
        </div>
    </section>
@endsection