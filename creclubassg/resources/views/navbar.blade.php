<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="{{asset('images/Pixabay-logo-new.png')}}" alt="pixabay logo" width="40" height="42"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
        @if (Session::has('CRECLUB_USER_ID'))
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/user/home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
          </li>
          <li>
            <a class="nav-link" href="{{url('/logout')}}">Logout</a>
          </li>
        @endif    
      </ul>
    </div>
  </nav>