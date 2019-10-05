<li class="list-inline-item dropdown notification-list">
    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
        href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <i class="far fa-bell"></i>
        <span class="noti-icon-badge"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">

        <!-- TODO Build Widget -->
        <!-- notiication header -->
        <div class="dropdown-item noti-title">
            <h5><small><span class="badge badge-danger">7</span>Notification</small></h5>
        </div>

        <!-- notification widget to be built -->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
            <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min
                    ago</small></p>
        </a>

        <!-- All-->
        <a href="{!! route('admin.notifications.index') !!}" class="dropdown-item notify-item notify-all">
            View All
        </a>
    </div>
    <!-- end dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
        -->
</li>
