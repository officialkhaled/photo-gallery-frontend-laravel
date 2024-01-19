<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Photo Gallery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('assets.css')

</head>

<body>

    @include('assets.header')

    @yield('content') {{-- Dynamic Content --}}

    @include('assets.footer')

    @include('assets.script')

</body>

</html>
