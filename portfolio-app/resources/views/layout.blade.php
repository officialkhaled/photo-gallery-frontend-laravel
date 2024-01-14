<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('css')

</head>

<body>

  @include('header')

  @yield('content') {{-- Dynamic Content --}}

  @include('footer')

  @include('script')

</body>

</html>