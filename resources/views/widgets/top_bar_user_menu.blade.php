<li class="list-inline-item dropdown notification-list">
        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
           aria-haspopup="false" aria-expanded="false">
            <img src="/storage/me.jpg" alt="user" class="rounded-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
            <!-- item-->
            <div class="dropdown-item noti-title">


                <h5 class="text-overflow"><small>Welcome! Mike</small> </h5>
            </div>

            <!-- item-->
            <a href="{!! route('admin.profile') !!}" class="dropdown-item notify-item">
                <i class="fas fa-user"></i> <span>Profile</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fas fa-cog"></i> <span>Settings</span>
            </a>

            <!-- item-->
            <!--
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
            </a>
        -->

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
            </a>

            <form id="logout-form" action="{!! url('/logout') !!}" method="POST" style="display:none;">
              {!! csrf_field() !!}
            </form>
        </div>
    </li>
