@sectionMissing('header')
<div class="pull-right">
    @include('header')
</div>
@endif
  <body>
    @sectionMissing('navbar')
    <div class="pull-right">
        @include('navbar')
    </div>
    @endif
    <form action="{{url('/user/login_submit')}}" method="post">
        @csrf
        <h1>Login</h1>
        <div class="imgcontainer">
          <img src="{{asset('images/avtar.jpg')}}" alt="Avatar" class="avatar">
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="email" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
           {{session('MSG')}}  
          <input type="submit" value="Login" name="login" />
          <p>Not Account?</p>
          <h4><a href="{{url('/signup')}}">Create Account</a></h4>
        </div>
      
      </form>
  </body>
</html>