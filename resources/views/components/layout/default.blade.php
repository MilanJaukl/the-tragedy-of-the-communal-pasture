<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/main.scss'])
    <title>Laravel</title>
</head>

<body $attribute>
    <div class="position-absolute start-50 top-50 translate-middle bg-white p-5 border border-1 rounded">
        {{ $slot }}

    </div>


    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
    @endif
</body>

</html>
