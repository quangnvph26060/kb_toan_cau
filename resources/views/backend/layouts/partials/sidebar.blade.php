<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}">
                        <i class="ri-dashboard-fill"></i><span data-key="t-dashboards">Tổng quan</span>
                    </a>
                </li>

                <!-- end Dashboard Menu -->

                <!-- start Configuration -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu hình</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.configurations.website.edit') }}" class="nav-link"
                                    data-key="t-website"> Cấu Hình Website</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.configurations.sliders.create') }}" class="nav-link"
                                    data-key="t-slider"> Cấu Hình Sliders Chuyên Gia</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.configurations.sliders.create_v2') }}" class="nav-link"
                                    data-key="t-slider"> Cấu Hình Sliders Body V1</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.configurations.sliders.create_v3') }}" class="nav-link"
                                    data-key="t-slider"> Cấu Hình Sliders Body V2</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.configurations.sliders.create_v4') }}" class="nav-link"
                                    data-key="t-slider"> Cấu Hình Sliders Body V3</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.configurations.videos.create') }}" class="nav-link"
                                    data-key="t-video"> Cấu Hình Slider Videos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.configurations.banners.edit') }}" class="nav-link"
                                    data-key="t-slider"> Cấu Hình Banners</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.configurations.website.mails') }}" class="nav-link"
                                    data-key="t-slider"> Cấu Hình Mail nhận</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.configurations.website.contact')}}">
                        <i class="ri-settings-line"></i><span data-key="t-dashboards">Thông tin liên hệ</span>
                    </a>
                </li>
                <!-- end Configuration -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
