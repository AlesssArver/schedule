<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div id="app">
    </div>

    <script src="js/app.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </body>
</html>
