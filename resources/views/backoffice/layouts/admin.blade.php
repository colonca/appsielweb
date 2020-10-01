<!DOCTYPE html>
<html lang="en" xmlns:livewire="http://www.w3.org/1999/html">

<head>
    <title>.:: Appsiel - Sistemas para el crecimiento empresarial </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description"
          content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project."/>
    <meta name="keywords"
          content="flat ui, admin , Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('backoffice/assets/icon/font-awesome/css/font-awesome.min.css')}}">

    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/assets/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- JQuery DataTable Css -->
    <link href="{{asset('backoffice/assets/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backoffice/assets/pages/notification/notification.css')}}">
    <livewire:styles/>
</head>

<body>
<div class="fixed-button">
    <a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
    </a>
</div>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="loader-bar"></div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <div class="mobile-search">
                        <div class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="index.html">
                        <img class="img-fluid" src="{{asset('images/Lg_ 1.png')}}" alt="Theme-Logo" width="100px"/>
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <a href="#!">
                                <img src="{{asset('backoffice/assets/images/avatar-4.jpg')}}" class="img-radius"
                                     alt="User-Profile-Image">
                                <span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li>
                                    <a href="#!">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-layout-sidebar-left"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">

                        <div class="pcoded-search">
                            <span class="searchbar-toggle">  </span>
                            <div class="pcoded-search-box ">
                                <input type="text" placeholder="Search">
                                <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Usuario</div>
                        <ul class="pcoded-item pcoded-left-item">
                            @if($location == 'inicio')
                            <li class="active">
                                <a href="{{route('admin')}}">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            @else
                                <li>
                                    <a href="{{route('admin')}}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Blogs &amp; Post</div>
                        <ul class="pcoded-item pcoded-left-item">
                            @if($location == 'categories')
                            <li class="active">
                                <a href="{{route('categories.index')}}">
                                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Categoría</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            @else
                                <li>
                                    <a href="{{route('categories.index')}}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Categoría</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            @endif
                            @if($location == 'post')
                            <li class="active">
                                <a href="{{route('post.index')}}">
                                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Post</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            @else
                                <li>
                                    <a href="{{route('post.index')}}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Post</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            @endif
                        </ul>

                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Customer &amp; Team</div>
                        <ul class="pcoded-item pcoded-left-item">
                            @if($location == 'customer')
                                <li class="active">
                                    <a href="{{route('customer.index')}}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Customer</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('customer.index')}}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Customer</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            @endif
                                @if($location == 'team')
                                    <li class="active">
                                        <a href="{{route('team.index')}}">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Team</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('team.index')}}">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Team</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                @endif
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('backoffice/assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backoffice/assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backoffice/assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backoffice/assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('backoffice/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('backoffice/assets/js/modernizr/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('backoffice/assets/js/modernizr/css-scrollbars.js')}}"></script>

<script src="{{asset('backoffice/assets/js/jquery-datatable/jquery.dataTables.js')}}"></script>

<!-- Custom js -->
<script type="text/javascript" src="{{asset('backoffice/assets/js/script.js')}}"></script>
<script src="{{asset('backoffice/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('backoffice/assets/js/vartical-demo.js')}}"></script>
<script src="{{asset('backoffice/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('backoffice/assets/js/bootstrap-growl.min.js')}}"></script>

<!-- sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<livewire:scripts/>
@yield('script')
<script>
    function notify(from, align, icon, type, animIn, animOut,body){
        $.growl({
            icon: icon,
            title: '',
            message: body,
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert" role="alert">' +
                '<button type="button" class="close" data-growl="dismiss">' +
                '<span aria-hidden="true">&times;</span>' +
                '<span class="sr-only">Close</span>' +
                '</button>' +
                '<span data-growl="icon"></span>' +
                '<span data-growl="title"></span>' +
                '<span data-growl="message"></span>' +
                '<a href="#" data-growl="url"></a>' +
                '</div>'
        });
    };
    livewire.on('message',message =>{
       notify('top', 'right', 'fa fa-check', message.type,'animated bounceInRight', 'animated bounceOutRight',message.body,);

    });
</script>
</body>

</html>
