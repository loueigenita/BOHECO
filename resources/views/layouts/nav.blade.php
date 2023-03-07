
<nav class="navbar">
  
  <div class="container">
    <div class="brand-and-toggler">
      <div class="logo"><img src="images/logo.png" alt="LOGO"> </div>
      <a href="/" class="logoname">
        BOHECO I
      </a>
      
      <button type="button" class="navbar-toggler text-white" id="navbar-toggler">
        <i class="fas fa-bars"></i>
      </button>

      
    </div>

    <div class="navbar-collapse">
      <ul class="navbar-nav text-center">
        <div class = "nav-item">
          <a href = "{{ url('/news') }}" class="nav-link">NEWS</a>
        </div>
        <div class = "nav-item">
          <a href = "{{url('/advisory')}}" class = "nav-link">ADVISORIES</a>
        </div>
        <div class = "nav-item">
          <a href = "#interruptions" class = "nav-link">ABOUT US</a>
        </div>

        @if (Route::has('login'))
        <div class = "nav-item">
          
          @auth
              <a href="{{ url('/home') }}" class="nav-link">HOME</a>
          @else
              <a href="{{ route('login') }}" class="nav-link">LOGIN</a>  
          @endauth
     
        </div>
        @endif
      </ul>
    </div>
    
  </div>
</nav>