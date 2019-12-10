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
      @if(Auth::user())
        @include('layouts.header')
      @endif
      <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    @if(! Auth::user())
                        @yield('content')
                    @endif
                </div>
                <div class="column">
                    <div class="columns">
                        <div class="column"></div>
                        <div class="column is-2">
                            <router-link to="/registry">
                                <a>Registry</a>
                            </router-link>
                        </div>
                        <div class="column is-2">
                            <router-link to="/login">
                                <a>Login</a>
                            </router-link>
                        </div>
                        <div class="column"></div>
                    </div>
                    <router-view></router-view>
                </div>
            </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>

    <script src="js/app.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </body>
</html>
