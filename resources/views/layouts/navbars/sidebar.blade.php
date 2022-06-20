<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ url('img/wallpaer2.jpg')}}">

  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      <img src="{{ url('/img/logo.png') }}" alt="img" width="80%">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">

      @if (auth()->user()->tipo_seguro == 'Todo' || auth()->user()->tipo_seguro =='mantenimiento')
      <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('/user') }}">
          <i class="material-icons">person_add</i>
          <p>{{ __('Ejecutivos') }}</p>
        </a>
      </li>
      @endif

      @if (auth()->user()->tipo_seguro =='Seguro Hogar'|| auth()->user()->tipo_seguro =='Todo' || auth()->user()->tipo_seguro =='mantenimiento')
      <li class="nav-item{{ $activePage == 'hogar' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('/hogar') }}">
          <i class="material-icons">business</i>
          <p>{{ __('Seguros de hogar') }}</p>
        </a>
      </li>
      @endif

      @if (auth()->user()->tipo_seguro =='Seguro Salud' || auth()->user()->tipo_seguro =='Todo' || auth()->user()->tipo_seguro =='mantenimiento')
      <li class="nav-item{{ $activePage == 'salud' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('/salud') }}">
          <i class="material-icons">healing</i>
          <p>{{ __('Seguros de salud') }}</p>
        </a>
      </li>
      @endif

      @if (auth()->user()->tipo_seguro =='Seguro EPS' || auth()->user()->tipo_seguro =='Todo' || auth()->user()->tipo_seguro =='mantenimiento')
      <li class="nav-item{{ $activePage == 'eps' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('/eps') }}">
          <i class="material-icons">local_hospital</i>
          <p>{{ __('Seguros de eps') }}</p>
        </a>
      </li>
      @endif

      @if (auth()->user()->tipo_seguro =='Seguro Sctr' || auth()->user()->tipo_seguro =='Todo' || auth()->user()->id == 4 || auth()->user()->tipo_seguro =='mantenimiento')
      <li class="nav-item{{ $activePage == 'sctr' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('/sctr') }}">
          <i class="material-icons">local_pharmacy</i>
          <p>{{ __('Seguros de sctr') }}</p>
        </a>
      </li>
      @endif

      <div class='navbar-form' style='display:none;'> </div>

    </ul>
  </div>
</div>