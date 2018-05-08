<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="/" class="sidebar-brand">
                <img src="/img/logo-white.png" srcset="/img/logo-white@2x.png 2x" alt="Mossebo market">
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                <div class="sidebar-user-avatar">
                    <avatar :src="'{{ Auth::guard('admin.web')->user()->avatar() }}'"></avatar>
                </div>

                <div class="sidebar-user-name">
                    {{ Auth::guard('admin.web')->user()->name }}
                </div>

                <div class="sidebar-user-links">
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Profile" style="display: none"><i class="gi gi-user"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Messages" style="display: none"><i class="gi gi-envelope"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Settings" style="display: none"><i class="gi gi-cogwheel"></i></a>
                    <a href="/logout" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                </div>
            </div>
            <!-- END User Info -->

            <!-- Sidebar Navigation -->
            <main-menu class="sidebar-nav"></main-menu>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
