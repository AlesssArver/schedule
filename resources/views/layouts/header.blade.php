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
      </div>
    </div>
</div>
</div>
</nav>
