<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43307012-1', 'edpug.co.uk');
  ga('send', 'pageview');

</script>
<header class="navbar navbar-fixed-top">
	<div class="navbar-inner">
        <div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			{{-- smooth scroll needs urls to be relative, so only add home route prefix if not on homepage  --}}
				
			<a class="brand" href="{{ Route::currentRouteName() == 'home' ? '' : URL::route('home') }}#home">ed<span>PUG</span></a>
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li><a href="{{ Route::currentRouteName() == 'home' ? '' : URL::route('home') }}#welcome">About</a></li>
					<li><a href="{{ Route::currentRouteName() == 'home' ? '' : URL::route('home') }}#meetup">Next meetup</a></li>
					<li><a href="{{ Route::currentRouteName() == 'home' ? '' : URL::route('home') }}#expect">What to expect</a></li>
					<li><a href="{{ Route::currentRouteName() == 'home' ? '' : URL::route('home') }}#contact">Find / Contact us</a></li>           
					@if (Auth::check())
					@if (Auth::user()->is_admin)
					<li><a href="/admin">Admin</a></li> 
					@endif
					<li><a href="{{ action('UserController@logout') }}">Logout</a></li> 
					@else
					<li><a href="{{ action('UserController@login') }}">Login</a></li> 
					@endif
					<li class="facebook">
						<a target="_blank" href="https://www.facebook.com/groups/50315848110/">Facebook</a>
					</li>
				</ul>
			</div>
        </div>
	</div>
</header>