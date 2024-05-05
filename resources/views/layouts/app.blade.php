<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Warung Medhuro</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/style.css')
</head>

<body>
    @include('layouts.nav')
    <div class="align-items-center">
        @yield('content')

    </div>
    @vite('resources/js/app.js')
</body>

</html>
