@extends('layouts.main')

@section('content')
  <main>
    <div class="container cards">

      @foreach ($products as $product)
        <!-- per le rotte diamiche, al metodo route passare come secondo paramtro un array associativo con le chiavi col nome dei parapretri dinamici inseriti nella rotta -->
        <a href="{{ route('product_detail', ['id' => $product['id']]) }}" class="card">
          <img src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
          <h4>{{ $product['titolo'] }}</h4>
        </a>
      @endforeach


    </div>
  </main>
@endsection

@section('title')
  Prodotti
@endsection
