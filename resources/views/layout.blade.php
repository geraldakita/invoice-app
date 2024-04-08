<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice | @yield('title', 'Default Title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="dark:bg-slate-900 bg-gray-100 h-full justify-center">
    @include('alert')

    @yield('content')

</body>

</html>