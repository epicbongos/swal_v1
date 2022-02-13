<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titsle') - Swal_v1</title>

    {{-- Styles --}}

    @stack('prepend-style')
    @include('style')
    @stack('addon-style')
</head>

<body>
    @include('navbar')
    @yield('content')
    @include('footer')

    @stack('prepend-script')
    @include('script')
    @stack('addon-script')
</body>
