<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>山东理工大学迎新系统</title>
  <script type="text/javascript" src="/js/app.js"></script>
  <script type="text/javascript" src="/js/shuffling.js"></script>
  <link href="/css/shuffling.css" rel="stylesheet">
  <link href="/css/home.css" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/foot.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>

</body>

</html>