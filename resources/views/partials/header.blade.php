<header>
    <nav>
        <a class="@if (Route::currentRouteName() == 'section_home') active @endif" href="{{ route('section_home') }}">HOME</a>
        <a class="@if (Route::currentRouteName() == 'section_about') active @endif" href="{{ route('section_about') }}">ABOUT</a>
    </nav>
</header>

{{-- Uso la classe Active sul link che corrisponde alla view in cui mi trovo --}}