<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/frontend/css/app.css">


    <title>The Lawns Restaurant</title>
</head>
<body>
    @include('templates.loader')
        @include('templates.navbar')
            @yield('stuff')
        @include('templates.footer')
        <script src="/frontend/js/main.js"></script>
</body>
</html>
