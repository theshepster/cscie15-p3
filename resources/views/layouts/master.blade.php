<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    @yield('custom-head')
</head>

<body>

    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    @include('includes.javascript')
</body>
</html>