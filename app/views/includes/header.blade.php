<header class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="{{ URL::route('home') }}">ed<span>PUG</span></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li{{-- class="active"--}}><a href="{{ URL::route('home') }}">Home</a></li>
              <li><a href="{{ URL::route('home') }}#next-meetup">Next meetup</a></li>
              <li><a href="{{ URL::route('home') }}#what-to-expect">What to expect</a></li>
              <li><a href="{{ URL::route('home') }}#find-us">Find us</a></li>
              <li><a href="{{ URL::route('home') }}#do-a-talk">Contact us</a></li>            
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
      </div>
    </header>