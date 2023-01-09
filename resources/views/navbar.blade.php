<nav class="nav">
    <a class="nav__logo" href="#">
        <img src="assets/logo.png" alt=""/> </a>
    <ul class="list nav__list">
        <li class="nav__item">
            <a class="nav__link" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="{{ route('space') }}">Espaço</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="{{ route('earth') }}">Terra</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="{{ route('fantasy') }}">Fantasia</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="#">Contato</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="{{ route('login') }}">Login</a>
        </li>
    </ul>
</nav>