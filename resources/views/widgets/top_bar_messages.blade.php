<li class="list-inline-item dropdown notification-list">
  <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
      href="#" role="button" aria-haspopup="false" aria-expanded="false">
      <i class="fa fa-envelope"></i>
      <span class="noti-icon-badge"></span>
  </a>

  <!-- Dropdown data -->
  <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
    <!-- Header -->
    <div class="dropdown-item noti-title bg-success">
        <h5><small><span class="badge badge-danger">7</span>Messages</small></h5>
    </div>

    <!-- Preview Items -->
        @for($i=0; $i<=2; $i++)
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <p class="notify-details">
              <strong>drone718@gmail.com</strong><br/>
              <span>This is a test display</span><br/>
              <small class="text-muted">{!! date('m/d/Y g:ia') !!}</small>
            </p>
          </a>
          @endfor

      <!-- All-->
      <a href="{!! route('admin.messages.index') !!}" class="dropdown-item notify-item notify-all">
          View All
      </a>
  </div>

</li>
