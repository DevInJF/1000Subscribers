<div class="title-bar" data-responsive-toggle="obstacle-nav" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title"><a href="/">1000 Subscribers</a></div>
    </div>

<nav class="top-bar" data-topbar id="mc-menu">
  @if (Auth::check())
    <div class="top-bar-left">
      <ul class="vertical medium-horizontal menu" data-dropdown-menu>
        <li class="menu-text hide-for-small-only"><a href="/dashboard">1000 Subscribers</a></li>
        <li class="alt-text hide-for-small-only">An <a href="https://obstacle.co" target="_blank">Obstacle.co</a> Course</li>
        <!--<li @if (Request::is('series*')) class="active" @endif><a href="/dashboard">Series</a></li>-->
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="has-submenu is-down-arrow">
          <a href="/dashboard">Hi, {{ Auth::user()->first_name }}</a>
          <ul class="submenu menu is-dropdown-submenu">
            <!--<li class="is-submenu-item is-dropdown-submenu-item"><a href="/student/{{ Auth::user()->id }}">View Profile</a></li>-->
            <li class="is-submenu-item is-dropdown-submenu-item"><a href="/settings">Edit Settings</a></li>
            <li class="is-submenu-item is-dropdown-submenu-item"><a href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  @else
    <div class="top-bar-left">
      <ul class="vertical medium-horizontal menu" data-dropdown-menu>
        <li class="menu-text hide-for-small-only"><a href="/">1000 Subscribers</a></li>
        <li class="alt-text hide-for-small-only">An <a href="https://obstacle.co" target="_blank">Obstacle.co</a> Course</li>
      </ul>
    </div>
    <div class="top-bar-right">
      <!--<ul class="vertical medium-horizontal menu" data-dropdown-menu>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
      </ul>-->
    </div>
  @endif
</nav>