@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Shoppy.me</title>
</head>
<body>
    <div class="">
        <div class="h-13 bg-sky-800 sticky top-0 drop-shadow">
            @section('header')
            @include('components.header')
            @show
        </div>
        <div>
            @yield('content')
        </div>
        <div class="bg-sky-800 mb-0">
            @section('footer')
            @include('components.footer')
            @show
        </div>
    </div>
</body>
</html>