<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="stylesheet" href="{{ asset('css/speech-input.css') }}">

  </head>
  <body>

    <div id="app">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <router-link to="/schedules">
                <a class="navbar-item">
                  Schedules Tab
                </a>
            </router-link>
            <router-link to="/settings">
                  <a class="navbar-item">
                    Settings
                  </a>
              </router-link>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              @guest
                <a href="{{ route('login') }}" class="button is-primary">
                  <strong>Sign up</strong>
                </a>
                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="button is-light">
                    Log in
                  </a>
                @endif
                @else
                  <div class="navbar-item has-dropdown is-hoverable">
                    <a href="/profile" class="navbar-link">{{ Auth::user()->first_name }} {{Auth::user()->last_name}}</a>
                    <div class="navbar-dropdown">
                      <router-link to="/settings">
                            <a class="navbar-item">
                              Settings
                            </a>
                        </router-link>
                      <a href="{{ route('logout') }}" class="navbar-item">Logout</a>
                      <form action="{{ route('logout') }}" method="post" style="display: none;">
                          @csrf
                      </form>
                    </div>
                  </div>
              @endguest
            </div>
          </div>
      </div>

      </div>
      </nav>

      <div class="section">
        <div class="container">
            @yield('content') 
           <router-view></router-view>
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
    <script src="{{ asset('js/voice.js') }}"></script>
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </body>
</html>
