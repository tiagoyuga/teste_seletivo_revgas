@php
    $userIsDev = Auth::user()->is_dev;
    $userIsAdmin = Auth::user()->is_admin;
    $firstAccess = Auth::user()->first_access;
@endphp

<div class="row border-bottom white-bg">
    <nav class="navbar navbar-expand-lg navbar-static-top" role="navigation">
        {{--<nav class="navbar navbar-expand-lg navbar-static-side" role="navigation">--}}

        <a href="{{ route('dashboard') }}" class="navbar-brand text-center">
            New Project
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-reorder"></i>
        </button>

        <!--</div>-->
        <div class="navbar-collapse collapse" id="navbar">

            {{--   somente admin         --}}
            @if($userIsDev || $userIsAdmin)

                <ul class="nav navbar-nav mr-auto">

                    <li class="{{ isActiveRoute('dashboard') }} {{ isActiveRoute('home') }}">
                        <a aria-expanded="false" role="button" href="{{ route('home') }}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">Início</span>
                        </a>
                    </li>

                    <li class="{{ isActiveRoute('doctors.index') }}">
                        <a aria-expanded="false" role="button" href="{{ route('doctors.index') }}">
                            <i class="fa fa-user-circle"></i>
                            <span class="nav-label">Médicos</span>
                        </a>
                    </li>

                    <li class="{{ isActiveRoute('company.*') }}">
                        <a aria-expanded="false" role="button" href=" {{ route('company.index') }}">
                            <i class="fa fa-institution"></i>
                            <span class="nav-label">Empresas</span>
                        </a>
                    </li>

                    <li class="{{ isActiveRoute('hospital.*') }}">
                        <a aria-expanded="false" role="button" href="{{ route('hospital.index') }}">
                            <i class="fa fa-plus-circle"></i>
                            <span class="nav-label">Hospitais</span>
                        </a>
                    </li>

                    <li class="{{ isActiveRoute('allocation.*') }}">
                        <a aria-expanded="false" role="button" href="{{ route('allocation.admin') }}">
                            <i class="fa fa-tags"></i>
                            <span class="nav-label">Lotação</span>
                        </a>
                    </li>

                    <li class="{{ isActiveRoute('dividend.*') }}">
                        <a aria-expanded="false" role="button" href="{{ route('dividend.index') }}">
                            <i class="fa fa-money"></i>
                            <span class="nav-label">Dividendos</span>
                        </a>
                    </li>

                    <li class="{{ isActiveRoute('reports') }}">
                        <a aria-expanded="false" role="button" href="{{ route('home') }}">
                            <i class="fa fa-file-text"></i>
                            <span class="nav-label">Relatórios</span>
                        </a>
                    </li>

                </ul>

            @endif

            {{--  somente médicos          --}}
            @if($userIsDev || !$userIsAdmin)

                @if(!$firstAccess)

                    <ul class="nav navbar-nav mr-auto">

                        <li class="{{ isActiveRoute('dashboard') }} {{ isActiveRoute('home') }}">
                            <a aria-expanded="false" role="button" href="{{ route('home') }}">
                                <i class="fa fa-home"></i>
                                <span class="nav-label">Início</span>
                            </a>
                        </li>

                        <li class="{{ isActiveRoute('doctors.create') }}">
                            <a aria-expanded="false" role="button" href="{{ route('doctors.create') }}">
                                <i class="fa fa-address-card"></i>
                                <span class="nav-label">Meus Dados</span>
                            </a>
                        </li>

                        <li class="{{ isActiveRoute('allocation.*') }}">
                            <a aria-expanded="false" role="button" href="{{ route('allocation.index') }}">
                                <i class="fa fa-tags"></i>
                                <span class="nav-label">Lotação</span>
                            </a>
                        </li>

                        <li class="{{ isActiveRoute('dividend.*') }}">
                            <a aria-expanded="false" role="button" href="{{ route('dividend.doctor') }}">
                                <i class="fa fa-money"></i>
                                <span class="nav-label">Dividendos</span>
                            </a>
                        </li>

                    </ul>

                @else

                    <ul class="nav navbar-nav mr-auto">
                        <li class="{{ isActiveRoute('doctors.create') }}">
                            <a aria-expanded="false" role="button" href="{{ route('doctors.create') }}">
                                <i class="fa fa-address-card"></i>
                                <span class="nav-label">Meus Dados</span>
                            </a>
                        </li>
                    </ul>

                @endif

            @endif

            <form name="frm_new_users_notifications" id="frm_new_users_notifications">
                {{ method_field('POST') }}
                {{ csrf_field() }}
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="{{ route('profile') }}">
                            <i class="fa fa-user"></i>Perfil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Sair
                        </a>
                    </li>
                </ul>
            </form>

        </div>
    </nav>
</div>
