<nav class="navbar navbar-expand-lg navbar-dark skin-navbar">
  <a class="navbar-brand" href="/">SCI-UNSSA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/ventas') }}">VENTAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/reportes') }}">REPORTES</a>
      </li>
     
    </ul>

         <a id="UsrName" >Biembenido : {{ Auth::user()->name }}</a>  
         <a id="UsrCloseSesion"href="{{ url('/logout') }}"class="btn btn-outline-danger my-2 my-sm-0 custom-btn"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar Sesión
         </a>

         <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
         </form>
      
    
   <!--   <button id="btn-close-sesion"  class="btn btn-outline-danger my-2 my-sm-0 custom-btn" >
      Cerrar Sesión </button> -->
  </div>
</nav>