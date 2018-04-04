<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Mossebo market</title>

        <meta name="description" content="">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/img/favicons/favicon.ico">
        <link rel="apple-touch-icon" href="/img/favicons/favicon.png" sizes="192x192">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        {{-- <script src="js/vendor/modernizr.min.js"></script> --}}

        <link rel="stylesheet" href="{{ mix('/css/app.css')  }}">

        @yield('styles')
    </head>
    <body>
        <div id="app">
            <!-- Page Wrapper -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available classes:

                'page-loading'      enables page preloader
            -->
            <div id="page-wrapper">
                <!-- Preloader -->
                <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
                <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
                <div class="preloader themed-background">
                    <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                    <div class="inner">
                        <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                        <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
                    </div>
                </div>
                <!-- END Preloader -->

                <!-- Page Container -->
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                    Available #page-container classes:

                    '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                    'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                    'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                    'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                    'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                    'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                    'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                    'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                    'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                    'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                    'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                    'style-alt'                                     for an alternative main style (without it: the default style)
                    'footer-fixed'                                  for a fixed footer (without it: a static footer)

                    'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                    'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                    'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                    'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
                -->
                <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">

                    <!-- Main Sidebar -->
                    @include('layouts/sidebar')
                    <!-- END Main Sidebar -->

                    <!-- Main Container -->
                    <div id="main-container">
                        <!-- Header -->
                        @include('layouts/navbar')
                        <!-- END Header -->

                        <!-- Page content -->
                        <div id="page-content">
                            <loading :loading="loading">
                                <router-view></router-view>
                            </loading>
                        </div>
                        <!-- END Page Content -->


                        <!-- Footer -->
                        @include('layouts/footer')
                        <!-- END Footer -->
                    </div>
                    <!-- END Main Container -->
                </div>
                <!-- END Page Container -->
            </div>
            <!-- END Page Wrapper -->

            <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
            <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        {{-- <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script> --}}

        <script>
            window.config = {
                interactionKey: "{{ \App\Http\Controllers\DataHandler::getRelevantKey() }}",
                userToken: "{{ Auth::guard('admin.web')->user()->api_token }}"
            }
        </script>

        <script src="/js/vendor/ckeditor/ckeditor.js" defer></script>
        <script src="{{ mix('/js/manifest.js') }}" defer></script>
        <script src="{{ mix('/js/vendor.js') }}" defer></script>
        <script src="{{ mix('/js/app.js') }}" defer></script>

        @yield('scripts')
    </body>
</html>