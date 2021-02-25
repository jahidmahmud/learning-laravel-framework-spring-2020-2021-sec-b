<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div id="header">
        @yield('header')
    </div>
    <div id="main_content">
        @yield('main_content')
    </div>
    <div id="footer">
        copyright@2021
    </div>
</body>
</html>
