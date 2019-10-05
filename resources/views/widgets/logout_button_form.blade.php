<a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
            </a>

            <form id="logout-form" action="{!! url('/logout') !!}" method="POST" style="display:none;">
              {!! csrf_field() !!}
            </form>