@extends('layouts.main')

@section('content')
  <main>
    <div class="container">

      <div class="card detail">
        <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
        <h1>{{ $product['titolo'] }}</h1>
        <h5>Tipo: {{ $product['tipo'] }} | Cottura: {{ $product['cottura'] }} | Peso: {{ $product['peso'] }}</h5>
        <p>
          <!-- sintassi per stampare HTML -->
          {!! $product['descrizione'] !!}
        </p>
      </div>


    </div>
  </main>
@endsection

@section('title')
  Prodotti
@endsection
