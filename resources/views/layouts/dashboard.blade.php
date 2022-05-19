<!DOCTYPE html>
<html>

<head>

    <!-- Title -->
    <title>Dashboard</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Dashboard" />
    <meta name="keywords" content="Admin,dashboard" />
    <meta name="author" content="" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset("assets2/plugins/pace-master/themes/blue/pace-theme-flash.css")}}" rel="stylesheet"/>
    <link href="{{asset("assets2/plugins/uniform/css/uniform.default.min.css")}}" rel="stylesheet"/>
    <link href="{{asset("assets2/plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/plugins/fontawesome/css/font-awesome.css")}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        
        @livewireStyles

    <link href="{{asset("assets2/plugins/line-icons/simple-line-icons.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/plugins/offcanvasmenueffects/css/menu_cornerbox.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/plugins/waves/waves.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/plugins/switchery/switchery.min.css")}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset("assets2/plugins/3d-bold-navigation/css/style.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets2/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/plugins/weather-icons-master/css/weather-icons.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/plugins/metrojs/MetroJs.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/plugins/toastr/toastr.min.css")}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{asset("assets2/css/modern.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/css/themes/green.css")}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets2/css/custom.css")}}" rel="stylesheet" type="text/css"/>



    <link rel="icon" href="{{asset("assets2/images/logo.png")}}" sizes="16x16 32x32" type="image/png">




</head>
<body class="page-header-fixed">
<div class="overlay"></div>

<div class="menu-wrap">
    <nav class="profile-menu">
        <div class="profile"><img src="{{Auth::user()->avatar}}" width="60" alt=""/><span>Logged in as {{Auth::user()->first_name}}</span></div>

    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>

<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <div class="flex justify-center bg-white">
                <img src="{{ asset('assets2/images/logo.png') }}" height="80" width="100" viewbox="0 0 48 48" alt="logo">
            </div>
            </div><!-- Logo Box -->
            <div class="search-button">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
            </div>
            <div class="topmenu-outer">
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <i class="fa fa-cogs"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            Fixed Header
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            Fixed Sidebar
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            Horizontal bar
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            Toggle Sidebar
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            Compact Menu
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            Hover Menu
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            Boxed Layout
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            Choose Theme Color
                                            <div class="color-switcher">
                                                <a class="colorbox color-blue" href="#" title="Blue Theme" data-css="blue"></a>
                                                <a class="colorbox color-green" href="#" title="Green Theme" data-css="green"></a>
                                                <a class="colorbox color-red" href="#" title="Red Theme" data-css="red"></a>
                                                <a class="colorbox color-white" href="#" title="White Theme" data-css="white"></a>
                                                <a class="colorbox color-purple" href="#" title="purple Theme" data-css="purple"></a>
                                                <a class="colorbox color-dark" href="#" title="Dark Theme" data-css="dark"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <span class="user-name">Logged in as {{Auth::user()->first_name}}<i class="fa fa-angle-down"></i></span>
                                <img class="img-circle avatar" src="{{Auth::user()->avatar}}" width="40" height="40" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-list" role="menu">
                                <li role="presentation"><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="{{url('logout')}}"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('logout')}}" class="log-out waves-effect waves-button waves-classic">
                                <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                            </a>
                        </li>

                    </ul><!-- Nav -->
                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->
    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <div class="sidebar-header">
                <div class="sidebar-profile">
                    <a href="javascript:void(0);" id="profile-menu-link">
                        <div class="sidebar-profile-image">
                            <img src="{{Auth::user()->avatar}}" class="img-circle img-responsive" alt="">
                        </div>
                        <div class="sidebar-profile-details ">
                            <span>{{Auth::user()->first_name}} {{Auth::user()->last_name}}<br><small style="text-transform: capitalize;">{{Auth::user()->role}}</small></span>
                        </div>
                    </a>
                </div>
            </div>
            <ul class="menu accordion-menu">


                    @if(Auth::user()->role == 'staff')
                        <li class="active"><a href="{{url('staff-dashboard')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>

                        <li><a href="{{url('staff-client-table')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Clients</p></a></li>
                        <li><a href="{{url('staff-credit-recovery-table')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-credit-card"></span><p>Credit Recovery</p></a></li>

                @endif

                        @if(Auth::user()->role == 'manager')
                            <li class="active"><a href="{{url('manager-dashboard')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                            <li><a href="{{url('manager-approval-table')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-check"></span><p>Approvals</p></a></li>
                            <li><a href="{{url('manager-users-table')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Staff</p></a></li>


                        @endif


                    @if(Auth::user()->role == 'client')
                        <li class="active"><a href="{{url('client-profile')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="{{url('client-payment-history')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-book"></span><p>Payments</p></a></li>

                    @endif



            </ul>
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->

@yield('content')
</main><!-- Page Content -->

<div class="cd-overlay"></div>


<!-- Javascripts -->
<script src="{{asset('assets2/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
<script src="{{asset('assets2/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>


<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script src="{{asset('assets2/plugins/jquery/jquery-2.1.4.min.js')}}"></script>

<script src="{{asset('assets2/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets2/plugins/pace-master/pace.min.js')}}"></script>
<script src="{{asset('assets2/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
<script src="{{asset('assets2/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets2/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets2/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('assets2/plugins/uniform/jquery.uniform.min.js')}}"></script>
<script src="{{asset('assets2/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
<script src="{{asset('assets2/plugins/offcanvasmenueffects/js/main.js')}}"></script>
<script src="{{asset('assets2/plugins/waves/waves.min.js')}}"></script>
<script src="{{asset('assets2/plugins/3d-bold-navigation/js/main.js')}}"></script>
<script src="{{asset('assets2/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets2/plugins/jquery-counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets2/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('assets2/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets2/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('assets2/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
<script src="{{asset('assets2/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('assets2/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets2/plugins/curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('assets2/plugins/metrojs/MetroJs.min.js')}}"></script>

<script src="{{asset('assets2/js/modern.js')}}"></script>
<script src="{{asset('assets2/js/pages/js/form-select2.js')}}"></script>
<script src="{{asset('assets2/js/pages/dashboard.js')}}"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>


@livewireScripts

</body>

</html>
