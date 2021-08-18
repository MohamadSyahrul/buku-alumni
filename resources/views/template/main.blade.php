<div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand"
                href="#">
                <span class="brand-logo">
                    </span>
                <h2 class="brand-text">Buku Alumni</h2>
            </a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                    class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                    class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                    data-ticon="disc"></i></a></li>
    </ul>
</div>
@if(Auth::user()->role_id=="mahasiswa")
<div class="shadow-bottom"></div>
<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('dashboard')}}"><i data-feather="home"></i>
                </i><span class="menu-title text-truncate" data-i18n="dashboard">Dashboard</span></a>
        </li>
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                data-feather="more-horizontal"></i>
        </li>
        <li class=" nav-item {{ Request::is('profile') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('profile')}}"><i data-feather='paperclip'></i>
                </i><span class="menu-title text-truncate" data-i18n="data Diri">Data Diri</span></a>
        </li>
        <li class=" nav-item {{ Request::is('alumni') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('alumni')}}">
                <i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Alumni">Alumni</span></a>
        </li>
        <li class=" nav-item {{ Request::is('album-alumni') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('album-alumni')}}"><i data-feather='archive'></i>
                <span class="menu-title text-truncate" data-i18n="Album">Album</span></a>
        </li>
    </ul>
</div>
@else
<div class="shadow-bottom"></div>
<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('dashboard')}}"><i data-feather="home"></i>
                </i><span class="menu-title text-truncate" data-i18n="dashboard">Dashboard</span></a>
        </li>
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                data-feather="more-horizontal"></i>
        </li>
        <li class=" nav-item  {{ Request::is('prodi') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('prodi')}}"><i data-feather="briefcase"></i><span class="menu-title text-truncate"
                    data-i18n="Profile">Prodi</span></a>
        </li>
        <li class=" nav-item {{ Request::is('album-akademik') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('album-akademik')}}"><i data-feather="book"></i><span class="menu-title text-truncate"
                    data-i18n="Calendar">Album</span></a>
        </li>
        <li class=" nav-item {{ Request::is('alumni') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('alumni')}}"><i data-feather="users"></i><span class="menu-title text-truncate"
                    data-i18n="Todo">Alumni</span></a>
        </li>
        <li class=" nav-item {{ Request::is('user-mahasiswa') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{url('user-mahasiswa')}}"><i data-feather="archive"></i><span class="menu-title text-truncate"
                    data-i18n="Todo">Akun Mahasiswa</span></a>
        </li>
        <li class=" nav-item {{ Request::is('user-Admin') ? 'active' : '' }}"><a class="d-flex align-items-center"
            href="{{url('user-Admin')}}"><i data-feather="lock"></i><span class="menu-title text-truncate"
                data-i18n="Todo">Akun Admin</span></a>
    </li>
    </ul>
</div>
@endif
