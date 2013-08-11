<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <a class="brand" href="#home">edPUG</a>
    <ul class="nav">
      <li{{-- class="active"--}}><a href="#home">Home</a></li>
      <li><a href="#next-meetup">Next meetup</a></li>
      <li><a href="#what-to-expect">What to expect</a></li>
      <li><a href="#find-us">How to find us</a></li>
      <li><a href="#do-a-talk">Want to do a talk?</a></li>
      <li><a href="#past-events">Event archive</a></li>
      
	  @if (Auth::check())
		@if (Auth::user()->is_admin)
			<li><a href="/admin">Admin</a></li> 
		@endif
		<li><a href="{{ action('UserController@logout') }}">Logout</a></li> 
	  @else
		<li><a href="{{ action('UserController@login') }}">Login</a></li> 
	  @endif
	  
    </ul>
  </div>
</div>