<header>
    <div class="header-container">
      <a href="/" class="brand">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
      </a>
      <nav>
        <ul>
          <li>
            <a>CHARACTERS</a>
          </li>
          <li class="{{ Route::currentRouteName() == 'products' ? 'active' : '' }}">
            <a href="{{ route('products') }}">COMICS</a>
          </li>
          <li>
            <a>MOVIES</a>
          </li>
          <li>
            <a>TV</a>
          </li>
          <li>
            <a>GAMES</a>
          </li>
          <li>
            <a>COLLECTIBLES</a>
          </li>
          <li>
            <a>VIDEOS</a>
          </li>
          <li>
            <a>FANS</a>
          </li>
          <li>
            <a>NEWS</a>
          </li>
          <li>
            <a>SHOP</a>
          </li>                
        </ul>
      </nav>
    </div>
    <div class="jumbo-header"></div>
</header>