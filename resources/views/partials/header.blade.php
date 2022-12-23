@php
  $menu = config('db.main_menu');
@endphp

<header>
  <div class="logo">
    <!-- percorso assoluto perché l'immagine è in public -->
    <img src="{{ Vite::asset('resources/img/logo-molisana.png') }}" alt="Logo La Molisana">
  </div>

  <nav>

    <ul>
      @foreach ($menu as $link)
        @php
          $class_active = Route::currentRouteName() === $link['route_name'] ? 'active' : '';

          if (Route::currentRouteName() === 'product_detail' && $link['route_name'] === 'products') {
              $class_active = 'active';
          }
        @endphp
        <li><a class="{{ $class_active }}" href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a></li>
      @endforeach
    </ul>

  </nav>
</header>
