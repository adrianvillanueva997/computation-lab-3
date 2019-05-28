@section('barra_menu_principal')
<nav class="navbar navbar-expand-lg px-5">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="navbar-brand" href="/home">FreelancerSpain</a>
        </li>
      </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav list-group-horizontal ml-auto">  
            <li class="nav-item mx-2">
              <a class="nav-link" href="/propuestas">Ver propuestas</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#contacta">Contacta</a>
            </li>
            @guest
            <li class="nav-item mx-2">
              <a class="nav-link" href="/login">Entra</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @else
            <li class="nav-item mx-2">
              <a class="nav-link" href="/user_home">Mi perfil</a>
            </li>
            <li class="nav-item mx-2">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            </li>
            @endguest
          </ul>
        </div>
    </nav>
@endsection
