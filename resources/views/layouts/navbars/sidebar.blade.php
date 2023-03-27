<div class="sidebar" style="z-index: 1" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Topicos Selectos') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('usuarios.index')}}">
          <i class="material-icons">face</i>
            <p>{{ __('usuarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'products' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('productos.index')}}">
          <i class="material-icons">inventory_2</i>
            <p>{{ __('productos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'provider' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('proveedores.index')}}">
          <i class="material-icons">local_shipping</i>
          <p>{{ __('proveedores') }}</p>
        </a>
      </li>
  
      <li class="nav-item{{ $activePage == ' clientes' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">hail</i>
            <p>{{ __('clientes') }}</p>
        </a>
      </li>
      <!--
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">shop_two</i>
          <p>{{ __('compras') }}</p>
        </a>
      </li>
     
-->
    </ul>
  </div>
</div>
