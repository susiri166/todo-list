<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do</title>
    @include('libraries.styles')
</head>
<body>
    @include('Components.nav')
    @yield('content')
    @include('libraries.scripts')
</body>
</html>