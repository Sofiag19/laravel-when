<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- fontawesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  {{-- link css --}}
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <title>Where</title>
</head>
<body>

  {{-- INCLUDE NAVBAR --}}
  @include('partials.navbar')

  {{-- CONTENT SECTION --}}
  @yield('body')

  {{-- FOOTER --}}
  @include('partials.footer')
  
  {{-- script jquery --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  {{-- script moment --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
  {{-- script js --}}
  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>