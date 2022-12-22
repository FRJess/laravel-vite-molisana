<header>
    <div class="logo">
        <!-- percorso assoluto perché l'immagine è in public -->
        <img src="{{ Vite::asset('resources/img/logo-molisana.png') }}" alt="Logo La Molisana">
    </div>

    <nav>
        <ul>
            <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">home</a>
            </li>
            <li><a class="{{ Route::currentRouteName() === 'products' ? 'active' : '' }}"
                    href="{{ route('products') }}">prodotti</a></li>
            <li><a class="{{ Route::currentRouteName() === 'posts' ? 'active' : '' }}"
                    href="{{ route('posts') }}">post</a></li>
            <li><a class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}"
                    href="{{ route('contacts') }}">contatti</a></li>
        </ul>
    </nav>
</header>
