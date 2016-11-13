<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'default title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/todo_style.css') }}"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     @yield('link')
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.0.min.js') }}"> </script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}">    </script>
</head>
<body>
        <div class="header">@yield('header')</div>
        <div class="left">@yield('left')</div>
        <div class="container">@yield('content')</div>     
    </body>
</html>
