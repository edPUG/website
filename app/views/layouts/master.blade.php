<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edPUG</title>
    {{ Basset::show('bootstrapper.css') }}
    {{ Basset::show('bootstrapper.js') }}
</head>
<body data-spy="scroll" data-target=".navbar" style="padding-top:40px;">
    
    @include('includes.header')
     
    @yield('content')
    
    @include('includes.footer')
</body>
</html>