<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- fontawesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  {{-- bootstrap --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  {{-- link css --}}
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <title>When</title>
</head>
<body>

  <div class="mx-auto" style="width: 1200px;">
    {{-- INCLUDE NAVBAR --}}
    @include('partials.header')

    {{-- CONTENT SECTION --}}
    @yield('body')

    {{-- FOOTER --}}
    @include('partials.footer')
  </div>

  
  
  {{-- script jquery --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  {{-- script moment --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
  {{-- script js --}}
  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>