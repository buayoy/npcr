<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('icon/icofont/css/icofont.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/animate.css/css/animate.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{asset('pages/flag-icon/flag-icon.min.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{asset('pages/menu-search/css/component.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/color/color-5.css')}}" id="color"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <!-- test -->
    <!-- jquery file upload Frame work -->
    {{--<link href="{{asset('pages/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet"/>--}}
    <!-- test end -->
    <!-- for requests -->
    <style>
        .rq {
            color: red;
        }
    </style>
    <!-- for requests END -->
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{asset('bower_components/select2/css/select2.min.css')}}" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/multiselect/css/multi-select.css')}}" /> {{--
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('pages/advance-elements/css/bootstrap-datetimepicker.css')}}">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap-daterangepicker/css/daterangepicker.css')}}"
    />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/datedropper/css/datedropper.min.css')}}" />
    <!-- Color Picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/spectrum/css/spectrum.css')}}" />
    <!-- Mini-color css -->
    <link rel="stylesheet" type="text/css" href="{{asset('pages/jquery-minicolors/css/jquery.minicolors.css')}}" /> --}}
    @yield('css')


    <style type="text/css">
        @media(max-width:767px) {
            #preview {
                width: 100%;
                height: 100%;
            }
        }
        @media(min-width:768px) {
            #preview {
                width: 100%;
                height: 100%;
            }
        }
        @media(min-width:992px) {
            #preview {
                width: 100%;
                height: 100%;
            }
        }
        @media(min-width:1200px) {
            #preview {
                width: 100%;
                height: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                        </a>
                        {{--  <a class="mobile-search morphsearch-search" href="#">
                                <i class="ti-search"></i>
                            </a>  --}}
                        <a href="#">
                            <h5>เน็ตประชารัฐ</h5>
                            {{-- <img class="img-fluid" src="{{asset('images/logo.png')}}" alt="Theme-Logo" /> --}}
                        </a>
                        <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                    </div>
                    @guest @else
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">
                                    <li>
                                        {{--<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>--}}
                                        </li>
                                        {{--  <li>
                                            <a class="main-search morphsearch-search" href="#">
                                                <!-- themify icon -->
                                                <i class="ti-search"></i>
                                            </a>
                                        </li>  --}}
                                        {{--<li>
                                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                                    <i class="ti-fullscreen"></i>
                                            </a>
                                        </li>--}}
                                <!-- สำหรับเมนูบน -->
                                {{--
                                <li class="mega-menu-top">
                                    <a href="#">
                                            Mega
                                            <i class="ti-angle-down"></i>
                                        </a>
                                    <ul class="show-notification row">
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Popular Links</h6>
                                            <ul class="mega-menu-links">
                                                <li><a href="form-elements-component.html">Form Elements</a></li>
                                                <li><a href="button.html">Buttons</a></li>
                                                <li><a href="map-google.html">Maps</a></li>
                                                <li><a href="user-card.html">Contact Cards</a></li>
                                                <li><a href="user-profile.html">User Information</a></li>
                                                <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Mailbox</h6>
                                            <ul class="mega-mailbox">
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-folder"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Data Backup</h5>
                                                            <small class="text-muted">Store your data</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-headphone-alt"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Support</h5>
                                                            <small class="text-muted">24-hour support</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-dropbox"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Drop-box</h5>
                                                            <small class="text-muted">Store large amount of data in one-box only
                                                                </small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-location-pin"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Location</h5>
                                                            <small class="text-muted">Find Your Location with ease of use</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Gallery</h6>
                                            <div class="row m-b-20">
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('images/mega-menu/01.jpg')}}"
                                                        alt="Gallery-1">
                                                </div>
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('images/mega-menu/02.jpg')}}"
                                                        alt="Gallery-2">
                                                </div>
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('images/mega-menu/03.jpg')}}"
                                                        alt="Gallery-3">
                                                </div>
                                            </div>
                                            <div class="row m-b-20">
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('images/mega-menu/04.jpg')}}"
                                                        alt="Gallery-4">
                                                </div>
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('images/mega-menu/05.jpg')}}"
                                                        alt="Gallery-5">
                                                </div>
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('images/mega-menu/06.jpg')}}"
                                                        alt="Gallery-6">
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
                                        </li>
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Contact Us</h6>
                                            <div class="mega-menu-contact">
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                                    <div class="col-9">
                                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                            <ul class="nav-right">
                                <!-- สำหรับทำแจ้งเตือน -->
                                {{--
                                <li class="header-notification">
                                    <a href="#!">
                                            <i class="ti-bell"></i>
                                            <span class="badge">5</span>
                                        </a>
                                    <ul class="show-notification">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="{{asset(" images/user.png ")}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="{{asset(" images/user.png ")}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="{{asset('images/user.png')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li> --}}
                                <!-- สำหรับแชท -->
                                {{--
                                <li class="header-notification">
                                    <a href="#!" class="displayChatbox">
                                            <i class="ti-comments"></i>
                                            <span class="badge">9</span>
                                        </a>
                                </li> --}}
                                <li class="user-profile header-notification">
                                        <a href="#">
                                            <img src="{{asset('images/user.png')}}" alt="User-Profile-Image">
                                        <span>{{ Auth::user()->title }}{{Auth::user()->fname}} {{Auth::user()->lname}}</span>
                                            <i class="ti-angle-down"></i>
                                        </a>
                                    <ul class="show-notification profile-notification">
                                        {{--
                                        <li>
                                            <a href="#!">
                                                    <i class="ti-settings"></i> Settings
                                                </a>
                                        </li> --}} {{--
                                        <li>
                                            <a href="user-profile.html">
                                                    <i class="ti-user"></i> Profile
                                                </a>
                                        </li> --}} {{--
                                        <li>
                                            <a href="email-inbox.html">
                                                    <i class="ti-email"></i> My Messages
                                                </a>
                                        </li> --}} {{--
                                        <li>
                                            <a href="auth-lock-screen.html">
                                                    <i class="ti-lock"></i> Lock Screen
                                                </a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <i class="ti-layout-sidebar-left">
                                                    </i> ออกจากระบบ
                                                </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- search -->
                            <div id="morphsearch" class="morphsearch">
                                <form class="morphsearch-form">
                                    <input class="morphsearch-input" type="search" placeholder="Search..." />
                                    <button class="morphsearch-submit" type="submit">Search</button>
                                </form>
                                {{--
                                <div class="morphsearch-content">
                                    <div class="dummy-column">
                                        <h2>People</h2>
                                        <a class="dummy-media-object" href="#!">
                                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                                <h3>Sara Soueidan</h3>
                                            </a>
                                        <a class="dummy-media-object" href="#!">
                                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                                <h3>Shaun Dona</h3>
                                            </a>
                                    </div>
                                    <div class="dummy-column">
                                        <h2>Popular</h2>
                                        <a class="dummy-media-object" href="#!">
                                                <img src="{{asset('images/avatar-1.png')}}" alt="PagePreloadingEffect" />
                                                <h3>Page Preloading Effect</h3>
                                            </a>
                                        <a class="dummy-media-object" href="#!">
                                                <img src="{{asset('images/avatar-1.png')}}" alt="DraggableDualViewSlideshow" />
                                                <h3>Draggable Dual-View Slideshow</h3>
                                            </a>
                                    </div>
                                    <div class="dummy-column">
                                        <h2>Recent</h2>
                                        <a class="dummy-media-object" href="#!">
                                                <img src="{{asset('images/avatar-1.png')}}" alt="TooltipStylesInspiration" />
                                                <h3>Tooltip Styles Inspiration</h3>
                                            </a>
                                        <a class="dummy-media-object" href="#!">
                                                <img src="{{asset('images/avatar-1.png')}}" alt="NotificationStyles" />
                                                <h3>Notification Styles Inspiration</h3>
                                            </a>
                                    </div>
                                </div> --}}
                                <!-- /morphsearch-content -->
                                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                            </div>
                            <!-- search end -->
                        </div>
                    </div>
                    @endguest
                </div>
            </nav>
            @guest @else {{--
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div> --}} @endguest
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @guest @else
                    <nav class="pcoded-navbar" pcoded-header-position="relative">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40" src="{{asset('images/user.png')}}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>{{ Auth::user()->title }}{{Auth::user()->fname}} {{Auth::user()->lname}}</span>
                                        <div>{{-- Auth::user()->tbuserrole->role_id --}}</div>
                                        <span id="more-details">
                                           
                                            <i class="ti-angle-down"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        @guest
                                        <!--<li><a href="{{ route('login') }}">Login</a></li>-->
                                        <!-- <li><a href="{{ route('register') }}">Register</a></li>-->
                                        @else
                                        <li class="more-details">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                            <i class="ti-layout-sidebar-left"></i>ออกจากระบบ</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="ms-hover plans" id="menuuser">
                                    <a href="#">
                                            <span class="pcoded-micon"><i class="ti-user"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.main">จัดการผู้ใช้</span>
                                            {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                                            {{--  <span class="pcoded-mcaret"></span>  --}}
                                    </a>
                                </li>
                                <li class="ms-hover usermanage" id="menunewpr">
                                    <a href="#">
                                                <span class="pcoded-micon"><i class="ti-layout"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.page_layout.main">ข่าวประชาสัมพันธ์</span>
                                                {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                                                {{--  <span class="pcoded-mcaret"></span>  --}}
                                        </a> {{--
                                    <ul class="pcoded-submenu">
                                    </ul> --}}
                                </li>
                            
                                <li class="ms-hover plans" id="menunewcm">
                                    <a href="#">
                                            <span class="pcoded-micon"><i class="ion-merge"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.main" style="margin-left: 4px"> ข่าวชุมชน</span>
                                            {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                                            {{--  <span class="pcoded-mcaret"></span>  --}}
                                    </a>
                                </li>
                                <li class="ms-hover plans" id="menuactivity">
                                    <a href="{{ route('activity.index') }}">
                                            <span class="pcoded-micon"><i class="ion-pin"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.main" style="margin-left: 7px"> กิจกรรมชุมชน</span>
                                            {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                                            {{--  <span class="pcoded-mcaret"></span>  --}}
                                    </a>
                                </li>
                                <li class="ms-hover plans" id="menureport">
                                    <a href="#">
                                            <span class="pcoded-micon"><i class="ion-pin"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.main" style="margin-left: 7px"> แจ้งปัญหา</span>
                                            {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                                            {{--  <span class="pcoded-mcaret"></span>  --}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @endguest
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script type="text/javascript" src="{{asset('js/jquery_002.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<!-- classie js -->
<script type="text/javascript" src="{{asset('bower_components/classie/js/classie.js')}}"></script>
<!-- Rickshow Chart js -->
<script src="{{asset('bower_components/d3/js/d3.js')}}"></script>
<script src="{{asset('bower_components/rickshaw/js/rickshaw.js')}}"></script>
<!-- Morris Chart js -->
<script src="{{asset('bower_components/raphael/js/raphael.min.js')}}"></script>
<script src="{{asset('bower_components/morris.js/js/morris.js')}}"></script>
<!-- Horizontal-Timeline js -->
<script type="text/javascript" src="{{asset('pages/dashboard/horizontal-timeline/js/main.js')}}"></script>
<!--common-json-color script-->
<script type="text/javascript" src="{{asset('js/color-json-common-page.js')}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset('bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<!-- Custom js -->
{{--<script type="text/javascript" src="{{asset('pages/dashboard/custom-dashboard.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<!-- pcmenu js -->
<script src="{{asset('js/pcoded.min.js')}}"></script>
<script src="{{asset('js/demo-12.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/jquery.mousewheel.min.js')}}"></script>
<!-- data-table js -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{asset('pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{asset('pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
{{--  <script src="{{asset('pages/data-table/js/data-table-custom.js') }}"></script>  --}}
<!-- test end -->
<!-- Custom js -->
<script type="text/javascript" src="{{asset('js/animation.js')}}"></script>







<script>
    window.setTimeout(function(){
        $('.alert').fadeTo(500,0).slideUp(500,function(){
            $(this).remove();
        })
    }, 5000);
</script>
@yield('footerScript')
</html>
