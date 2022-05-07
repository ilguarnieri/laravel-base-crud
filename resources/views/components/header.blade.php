<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('homepage') }}">BackComics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
              
            <li class="{{ Request::route()->getName() == 'homepage' ? 'nav-item active' : 'nav-item' }}">
              <a class="nav-link" href="{{ route('homepage') }}">Home</a>
            </li>

            <li class="{{ Request::route()->getName() == 'comics.index' ? 'nav-item active' : 'nav-item' }}">
              <a class="nav-link" href="{{ route('comics.index') }}">Lista Comics</a>
            </li>

            <li class="{{ Request::route()->getName() == 'comics.create' ? 'nav-item active' : 'nav-item' }}">
              <a class="nav-link" href="{{ route('comics.create') }}">Crea Comic</a>
            </li>
    
          </ul>
        </div>
    </nav>
</header>
