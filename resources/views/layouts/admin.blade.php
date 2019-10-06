<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
</head>

<body class="fixed-left">

<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- Logo -->
        <div class="topbar-left">
            <a href="{!! route('admin.dashboard.index') !!}" class="logo">
                
                <span>Admin</span>
            </a>
        </div>

        <!-- NAVBAR START -->
        <div class="navbar-custom">
            <ul class="list-inline float-right mb-0">

                <!-- NOTIFICATIONS -->
                {!! Widget::topBarNotifications() !!}
                

                <!-- Messages -->
                {!! Widget::topBarMessages() !!}

                <!-- Logout -->
                {!! Widget::topBarUserMenu() !!}
            </ul>

            {!! Widget::topBarSearchField() !!}

        </div>
        <!-- END NAVBAR -->


    </div>
    <!-- Top Bar End -->

    {!! Widget::adminSideBarNavigation() !!}

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">
                                @if(isset($pageTitle))
                                    {!! $pageTitle !!}
                                @else
                                    {!! config('app.name') !!}
                                @endif
                            </h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="{!! route('admin.dashboard.index') !!}">Dashboard</a></li>
                                @if(isset($breadcrumbs))
                                    @foreach($breadcrumbs as $crumb)
                                        @if($crumb['active'] == true)
                                            <li class="breadcrumb-item active">{!! $crumb['name'] !!}</li>
                                        @else
                                            <li class="breadcrumb-item">
                                                <a href="{!! $crumb['route'] !!}">
                                                    {!! $crumb['name'] !!}
                                                </a>
                                            </li>
                                        @endif

                                    @endforeach
                                @endif
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

                @yield('content')

                
            </div>
        </div>
    </div>

    <footer class="footer">Footer Text</footer>

</div>




</body>

</html>