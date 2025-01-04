<header class="topbar">

    <div class="with-vertical">

        <nav class="navbar navbar-expand-lg p-0">

            <ul class="navbar-nav">
                <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                    <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>

            <div class="d-block d-lg-none py-4">
                <a href="{{ route('home') }}" class="text-nowrap logo-img">
                    {{--<img src="{{ asset('modernize/dist/assets/images/logos/dark-logo.svg') }}" class="dark-logo" style="width:130px;" alt="Logo-Dark">--}}
                    <img src="{{ $logo }}"
                         class="dark-logo" style="width:130px;" alt="RevGás">

                    <img src="{{ $logo }}" class="light-logo"
                         alt="Logo-light" style="display: none;">
                </a>
            </div>

            <ul class="navbar-toggler border-0 navbar-nav flex-row align-items-center justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="user-profile-img">
                                <img src="{{ asset('modernize/dist/assets/images/profile/user-1.jpg') }}"
                                     class="rounded-circle" width="35" height="35" alt="modernize-img">
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <div class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)"
                       class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center"
                       type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                       aria-controls="offcanvasWithBothOptions">
                        <i class="ti ti-align-justified fs-7"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>