<!-- ========== Left Sidebar Start ========== -->

 <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="{!! route('admin.dashboard.index') !!}" class="waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="zmdi zmdi-format-underlined"></i> 
                                    <span> Blog Entries </span> 
                                    <span class="menu-arrow"></span>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">New Entry</a>
                                    </ul>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="zmdi zmdi-format-underlined"></i> 
                                    <span> Portfolio </span> 
                                    <span class="menu-arrow"></span>
                                    <ul class="list-unstyled">
                                        <li><a href="{!! route('admin.work.index') !!}">View All Work</a></li>
                                        <li><a href="{!! route('admin.work.create') !!}">Add Item To Work</a></li>
                                    </ul>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="zmdi zmdi-format-underlined"></i> 
                                    <span> Snippets </span> 
                                    <span class="menu-arrow"></span>
                                    <ul class="list-unstyled">
                                        <li><a href="{!! route('admin.code.index') !!}">View All Code Snippets</a></li>
                                        <li><a href="{!! route('admin.code.create') !!}">Add New Code Snippet</a></li>

                                        
                                        <li><a href="{!! route('admin.code-categories.index') !!}">View Snippet Categories</a></li>
                                        <li><a href="{!! route('admin.code-categories.create') !!}">Add New Snippet Category</a></li>
                                        
                                    </ul>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="zmdi zmdi-format-underlined"></i> 
                                    <span> Messages </span> 
                                    <span class="menu-arrow"></span>
                                    <ul class="list-unstyled">
                                        <li><a href="{!! route('admin.messages.index') !!}">View All Messages</a></li>
                                        <li><a href="{!! route('admin.messages.index') !!}?view=new">View New Messages</a></li>
                                        <li><a href="{!! route('admin.messages.index') !!}?view=sent">View Sent Messages</a></li>
                                        <li><a href="{!! route('admin.messages.index') !!}?view=trash">View Deleted Images</a></li>
                                        

                                    </ul>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="zmdi zmdi-format-underlined"></i> 
                                    <span> Static Content </span> 
                                    <span class="menu-arrow"></span>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Me</a></li>   
                                    </ul>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="{!! route('admin.dashboard.index') !!}" class="waves-effect">
                                    <i class="zmdi zmdi-view-dashboard"></i>
                                    <span> Social Media </span>
                                </a>
                            </li>

                            <li class="text-muted menu-title">More</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="zmdi zmdi-view-dashboard"></i>
                                    <span> Profile </span>
                                </a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="zmdi zmdi-view-dashboard"></i>
                                    <span> Change Password </span>
                                </a>
                            </li>
                            <li>{!! Widget::logoutButtonForm() !!}</li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->