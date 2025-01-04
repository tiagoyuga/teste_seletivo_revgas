@php
    $menuAll = [
        [
            'active' => false,
            'text' => 'Bancos',
            'url' => route('home'),
            'icon' => '<i class="ti ti-id"></i>',
        ],
    ];
    $menuAll;
@endphp

        <!-- Sidebar Start -->
<aside class="left-sidebar with-vertical">

    <div>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="text-nowrap logo-img">

                <img src="{{ $logo }}"
                     class="dark-logo logo-panel" alt="Logo-Dark"
                     style="display: flex;">

                <img src="{{ $logo }}"
                     class="light-logo" alt="Logo-light"
                     style="display: none;">
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-x"></i>
            </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar simplebar-scrollable-y" data-simplebar="init">

            <div class="simplebar-wrapper" style="margin: 0px -24px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>

                <div class="simplebar-mask">

                    <div class="simplebar-offset" style="right: 0px; bottom: 0px; left: 0px;">

                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                             aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">

                            <div class="simplebar-content" style="padding: 0px 24px;">
                                <ul id="sidebarnav">
                                    <!-- ---------------------------------- -->
                                    <!-- Menus -->
                                    <!-- ---------------------------------- -->
                                    <li class="nav-small-cap">
                                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                        <span class="hide-menu">Menu</span>
                                    </li>
                                    @foreach($menuAll as $menu)

                                        <li class="sidebar-item">
                                            <a class="sidebar-link {{ $menu['active'] }}" href="{{ $menu['url'] }}"
                                               id="get-url---" aria-expanded="false"
                                               @if($menu['text']=='Sair' )onclick="event.preventDefault(); document.getElementById('logout-form').submit();" @endif>
                                                <span>{!! $menu['icon'] !!}</span>
                                                <span class="hide-menu">{{ $menu['text'] }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
    </div>
</aside>
<!--  Sidebar End -->
<style>
    .logo-panel {
        max-width: 130px;
        max-height: 120px;
        justify-content: center;
        margin: 10px
    }
</style>