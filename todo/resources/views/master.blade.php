<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'default title')</title>
</head>
<body>
    <div class="header">header</div>
    <div class="container">
        @yield('content')
    </div>
<div class="footer">
    footer
</div>
</body>
</html>