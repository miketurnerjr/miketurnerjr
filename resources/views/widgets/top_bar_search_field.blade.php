<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left waves-light waves-effect">
            <i class="fas fa-bars"></i>
        </button>
    </li>

    <li class="hidden-mobile app-search">
        <form action="{!! route('admin.search.index') !!}" class="" role="search" method="GET">
            <input type="text" placeholder="Search Site..." name="seach" class="form-control" />
            <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
        </form>
    </li>
</ul>