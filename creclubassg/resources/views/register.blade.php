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

    <h1 style="text-align: center;">Registration</h1>
        
    <div class="imgcontainer">
      <img src="{{asset('images/register.jpg')}}" alt="Avatar" class="avatar">
    </div>

    <form action="{{url('register')}}" method="post">
        @csrf
      
        <div class="container">
          <label for="uname"><b>User Name:</b></label>
          <input type="text" placeholder="Enter Your Name" name="name" required>

          <label for="uname"><b>Email Address:</b></label>
          <input type="email" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password:</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <input type="submit" value="Create Account" name="signup" />
          <p>Have Account?</p>
          <h4><a href="{{url('/')}}">Login</a></h4>          
        </div>
      
      </form>
  </body>
</html>