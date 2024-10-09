<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Gestion des Responsables</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('responsables.index') }}">Responsables</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('departements.index') }}">Départements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('regions.index') }}">Régions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('affectations.index') }}">Affectations</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
