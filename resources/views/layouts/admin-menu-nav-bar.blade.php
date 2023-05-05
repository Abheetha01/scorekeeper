<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img style="width: 40px" src="{{ asset('img/logo/logo.png') }}" alt="">
        </span>
        <span style="text-transform: capitalize; font-size: 35px; font-family: 'Teko', sans-serif; color: yellow" class="app-brand-text demo menu-text fw-bolder ms-2">SCORE</span>
        <span style="text-transform: capitalize; font-size: 35px; font-family: 'Teko', sans-serif; margin-left: 0px !important; color: white" class="app-brand-text demo menu-text fw-bolder ms-2">KEEPER</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    @php
    $classInItemScoreBoard = "";
    $classInItemTeams = "";
    $classInItemPlayers = "";
    $classInItemMatches = "";
    $classInItemAdminUsers = "";
    $path = Request::path();

    if ($path == 'admin-panel/admin-users') {
      $classInItemAdminUsers = "active";
    }elseif ($path == 'admin-panel/matches') {
      $classInItemMatches = "active";
    }elseif ($path == 'admin-panel/players') {
      $classInItemPlayers = "active";
    }elseif ($path == 'admin-panel/teams') {
      $classInItemTeams = "active";
    }elseif ($path == 'admin-panel/scoreboard') {
      $classInItemScoreBoard = "active";
    }
  @endphp

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{$classInItemScoreBoard}}">
        <a href="/admin-panel/scoreboard" class="menu-link">
          <i style="padding-right: 10px; font-size: x-large;" class="fa-solid fa-arrow-down-1-9"></i>
          <div data-i18n="Analytics" style="font-weight: bolder;">SCOREBOARD</div>
        </a>
      </li>

      <li class="menu-item {{$classInItemTeams}}">
          <a href="/admin-panel/teams" class="menu-link">
              <i style="padding-right: 10px; font-size: x-large;" class="fa-solid fa-people-group"></i>
            <div data-i18n="Analytics">TEAMS</div>
          </a>
        </li>

        <li class="menu-item {{$classInItemPlayers}}">
          <a href="/admin-panel/players" class="menu-link">
              <i style="padding-right: 10px; font-size: x-large;" class="fa-solid fa-user"></i>
            <div data-i18n="Analytics">PLAYERS</div>
          </a>
        </li>

        <li class="menu-item {{$classInItemMatches}}">
          <a href="/admin-panel/matches" class="menu-link">
              <i style="padding-right: 10px; font-size: x-large;" class="fa-solid fa-dice-d20"></i>
            <div data-i18n="Analytics">MATCHES</div>
          </a>
        </li>

        <li class="menu-item {{$classInItemAdminUsers}}">
          <a href="/admin-panel/admin-users" class="menu-link">
              <i style="padding-right: 10px; font-size: x-large;" class="fa-solid fa-user-secret"></i>
            <div data-i18n="Analytics">ADMIN USERS</div>
          </a>
        </li>
    </ul>
  </aside>
  <!-- / Menu -->