<header>
  <div class="logo">
    <img src="{{ Vite::asset('resources/img/logo-molisana.png') }}" alt="Logo La Molisana">
  </div>

  <nav>
    <ul>
      @foreach (config('db.main_menu') as $link)
        <li><a class="{{ Route::currentRouteName() === $link['route_name'] ? 'active' : '' }}"
            href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a>
        </li>
      @endforeach
    </ul>
  </nav>
</header>
