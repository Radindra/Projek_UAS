<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.jss') }}">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Kost Bu Sapto | Home</title>
    
  </head>
  <body>
    


    @include('partials.navbar')

<div class="container mt-4">
    @yield('container')

</div>
    
      <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.jss') }}">
      </body>
</html>