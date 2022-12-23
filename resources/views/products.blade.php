@extends('layouts.main')

@section('content')
  <main>
    <div class="container cards">

      @foreach ($products as $product)
        <div class="card">
          <img src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
          <h4>{{ $product['titolo'] }}</h4>
        </div>
      @endforeach

    </div>
  </main>
@endsection

@section('title')
  Prodotti
@endsection
