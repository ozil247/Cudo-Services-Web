<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/mc-my-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 16:18:55 GMT -->

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="i/mage/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/images/ccc1.png" />

    <!-- PAGE TITLE HERE -->
    <title>Cudo Services</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap4-toggle.min.css">
    <!-- Bootstrap seclect -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-select.min.css" />
    <!-- Price Range Slider -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-slider.min.css" />
    <!-- Bootstrap data table -->
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.min.css">
    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="/css/dropzone.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="/css/font.css" />
    <!-- Feather icon -->
    <link rel="stylesheet" type="text/css" href="/css/feather.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
    <!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="/css/lc_lightbox.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.min.css">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" type="text/css" href="/css/m-custom-scrollbar.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="/css/slick.min.css">
    <!-- Slick Theme -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
    <!-- Main STyle Sheet -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="windows8">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">

        <header id="header-admin-wrap" class="header-admin-fixed">

            <!-- Header Start -->
            <div id="header-admin">
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="header-left">

                        <div class="my-account-logo">

                        <div class="my-account-logo">
                            <a href="{{route('dashboard')}}"><img src="/images/ccc1.png" alt=""></a>
                        </div>

                        </div>



                    </div>
                    <!-- Left Side Content End -->

                    <!-- Right Side Content -->
                    <div class="header-right">

                        <div class="header-menu">
                            <!-- NAV Toggle Button -->
                            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse"
                                type="button" class="navbar-toggler collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar-first"></span>
                                <span class="icon-bar icon-bar-two"></span>
                                <span class="icon-bar icon-bar-three"></span>
                            </button>

                            <!-- MAIN Vav -->
                            <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-start">

                                <ul class=" nav navbar-nav">
                                    <li class="has-child current-menu-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                                    <li class="has-child"><a href="{{route('all.vendors')}}">All Vendors</a>
                                    </li>
                                    <li class="has-child"><a href="{{route('all.users')}}">All Users</a>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <ul class="header-widget-wrap">

                            <li class="header-widget">
                                <div class=" sf-toogle-btn">
                                    <i class="feather-power"></i>
                                </div>
                                <div class="ws-toggle-popup popup-tabs-wrap-section user-welcome-area">
                                    @if(Auth::user())

                                        <ul class="user-welcome-list">
                                            <li><strong>Welcome , <span
                                                        class="site-text-primary">{{ Auth::user()->name }}</span></strong>
                                            </li>

                                            <a class="dropdown-item" onclick="logout()" href="#">Logout</a>

                                            <form id="logout-form" action="{{ route('logout') }} "
                                                method="post"> @csrf</form>


                                        </ul>

                                    @endif
                                </div>
                            </li>


                        </ul>
                    </div>
                    <!-- Right Side Content End -->

                </div>
            </div>
            <!-- Header End -->

        </header>

        <!-- Sidebar Holder -->
        <nav id="sidebar-admin-wraper">
            <div class="pro-my-account-wrap">
                Vender My Account
            </div>
            <div class="admin-nav">
                <ul class="">
                    <li class="active">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i><span
                                class="admin-nav-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{route('category')}}"><i class="fa fa-pencil-square-o"></i><span
                                class="admin-nav-text">Add Category</span></a>
                    </li>
                    <li>
                        <a href="{{route('all_job_categories')}}"><i class="fa fa-comments"></i><span
                                class="admin-nav-text">All Job Category</span></a>
                    </li>
                    <li>
                        <a href="{{ route('blog_category') }}"><i class="fa fa-pencil-square-o"></i><span
                                class="admin-nav-text">Add Blog Category</span></a>
                    </li>
                    <li>
                        <a href="{{route('all.blog.category')}}"><i class="fa fa-comments"></i><span
                                class="admin-nav-text">All Blog Category</span></a>
                    </li>
                    <li>
                        <a href="{{route('create.blog.post')}}"><i class="fa fa-pencil-square-o"></i><span
                                class="admin-nav-text">Create Blog</span></a>
                    </li>
                    <li>
                        <a href="{{route('all.contact.messages')}}"><i class="fa fa-comments"></i><span
                                class="admin-nav-text">All Contact Messages</span></a>
                    </li>
                    <li>
                        <a href="{{route('all.vendors')}}"><i class="fa fa-users"></i><span
                                class="admin-nav-text">All Vendors</span></a>
                    </li>
                    <li>
                        <a href="{{route('all.users')}}"><i class="fa fa-users"></i><span
                                class="admin-nav-text">All Clients</span></a>
                    </li>


                </ul>
            </div>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                <div class="admin-top-area d-flex flex-wrap justify-content-between m-b30 align-items-center">

                    <div class="admin-left-area">
                        <a class="nav-btn-admin d-flex justify-content-between align-items-center" id="sidebarCollapse">
                            <span class="nav-btn-text">Dashboard Menu</span>
                            <span class="fa fa-reorder"></span>
                        </a>
                    </div>

                    <div class="admin-right-area">
                        <div class="pro-pic-info-wrap d-flex">
                            <div class="pro-pic-box">
                                <img src="images/user.jpg" alt="" />
                            </div>
                            <div class="pro-pic-info">
                                <div class="pro-pic-info">
                                    <strong>{{ Auth::user()->name }}</strong>
                                </div>

                                <div class="pro-pic-info">
                                    <strong>{{ Auth::user()->type }}</strong>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                @yield('content')




                <!-- JAVASCRIPT  FILES ========================================= -->
                <script src="/js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
                <script src="/js/popper.min.js"></script><!-- POPPER.MIN JS -->
                <script src="/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
                <script src="/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT -->
                <script src="/js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
                <script src="/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
                <script src="/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
                <script src="/js/counterup.min.js"></script><!-- COUNTERUP JS -->
                <script src="/js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
                <script src="/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

                <script src="/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
                <script src="/js/slick.min.js"></script><!-- OWL  SLIDER  -->

                <script src="/js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
                <script src="/js/m-custom-scrollbar.min.js"></script><!-- my account left panel scroller -->
                <script src="/js/dropzone.js"></script><!-- Images upload -->

                <script src="/js/bootstrap4-toggle.min.js"></script>
                <script src="/js/jquery.dataTables.min.js"></script>
                <script src="/js/dataTables.bootstrap4.min.js"></script>

                <!-- DevExtreme library -->
                <script src="/../../cdn3.devexpress.com/jslib/21.2.3/js/dx.all.js"></script>

                <script src="/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
                <script src="/js/lc_lightbox.lite.js"></script><!-- IMAGE POPUP -->
                <script src="/js/bootstrap-slider.min.js"></script><!-- Form js -->

                <script>
                    jQuery(() => {
                        const source = new DevExpress.data.DataSource({
                            load() {
                                return $.getJSON(
                                    'https://js.devexpress.com/Demos/WidgetsGallery/JSDemos/data/monthWeather.json'
                                );
                            },
                            loadMode: 'raw',
                            filter: ['t', '>', '2'],
                            paginate: false,
                        });

                        const palette = ['#022279', '#a2b5e7', '#ffb600'];
                        let paletteIndex = 0;

                        jQuery('#chart').dxChart({
                            dataSource: source,
                            title: '',
                            size: {
                                height: 420,
                            },
                            series: {
                                argumentField: 'day',
                                valueField: 't',
                                type: 'bar',
                            },
                            customizePoint() {
                                const color = palette[paletteIndex];
                                paletteIndex = paletteIndex === 2 ? 0 : paletteIndex + 1;

                                return {
                                    color,
                                };
                            },
                            legend: {
                                visible: false,
                            },
                            export: {
                                enabled: false,
                            },
                            valueAxis: {
                                label: {
                                    customizeText() {
                                        return `${this.valueText}`;
                                    },
                                },
                            },
                            loadingIndicator: {
                                enabled: true,
                            },
                        });

                        jQuery('#choose-temperature').dxSelectBox({
                            dataSource: [2, 4, 6, 8, 9, 10, 11],
                            value: 2,
                            onValueChanged(data) {
                                source.filter(['t', '>', data.value]);
                                source.load();
                            },
                        });
                    });

                    function logout() {
                        $('#logout-form').submit();
                    }

                </script><!-- Form js -->

                <script>

                </script>
            </div>
        </div>

    </div>

</body>

<!-- Mirrored from aonetheme.com/sf-html-demo/mc-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 16:18:55 GMT -->

</html>
