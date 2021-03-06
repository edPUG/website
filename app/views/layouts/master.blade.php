<!DOCTYPE html>
<!--[if IE 7]> <html class="ie-sucks"> <![endif]-->
<!--[if IE 8]> <html class="ie-sucks"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

  <head>

@include('includes.ascii')

    <meta charset="utf-8">
    <title>
    @section('title')
	  edPUG - Edinburgh PHP User Group
	  @show
    </title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="edPUG, The Edinburgh PHP User group meets every 3rd Tuesday of the month for talks, videos and general discussion on all things web related and beyond. new members arrive all the time, so if you've not been before, what's stopping you? See you soon! edPUG">
    <meta name="author" content="edPUG">

    <!-- The HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" type="text/css" href="/assets/stylesheets/ie.css" />   
    <![endif]-->
    
    <!-- The styles -->
    @stylesheets('application')

    @if (0)
    <!-- The fav and touch icons -->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">
    @endif
    
  </head>

  <body data-spy="scroll" data-target=".navbar" id="welcome">

  @include('includes.header')
   
    @section('masthead')
    <section class="masthead-wrapper" id="home"></section>
    @show
    
    @yield('content')
   
    @include('includes.footer')
    @javascripts('application')
    
  </body>
</html>

