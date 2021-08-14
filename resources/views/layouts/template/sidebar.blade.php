<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('dashboard')}}l"><span class="brand-logo">
                        <!-- <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                    <defs>
                        <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                            <stop stop-color="#000000" offset="0%"></stop>
                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                            </g>
                        </g>
                    </g>
                </svg> -->
                        <img src="{{ asset('Poliwangi Logo.png')}}" style=";max-height: 40px;max-width: 40px;">
                        <!--  <div class="col-lg-9 d-none d-lg-block " style="background-image: url('{{ asset('Poliwangi Logo.png')}} '); background-size: cover;background-position: center;max-height: 150px;max-width: 150px;margin-left:5em;margin-top: 10em;margin-right: 5em"></div -->
                    </span>
                    <h2 class="brand-text" style="margin-top: -0.5em">Buku Alumni</h2><br />
                    <!-- <p style="text-transform: uppercase;" class="brand-text">{{Auth::user()->role_id}}</p> -->
                </a></li>

        </ul>
    </div>
    @if(Auth::user()->role_id=="mahasiswa")
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!--  -->
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('dashboard') ? 'active' : '' }}" href="{{url('dashboard')}}"><i
                        data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">Home</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('profile') ? 'active' : '' }}" href="{{url('profile')}}"><i
                        data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Profile">Data
                        diri</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('alumni') ? 'active' : '' }}" href="{{url('alumni')}}"><i
                        data-feather="users"></i><span class="menu-title text-truncate"
                        data-i18n="Todo">Alumni</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('album-alumni') ? 'active' : '' }}" href="{{url('album-alumni')}}"><i
                        data-feather="book"></i><span class="menu-title text-truncate"
                        data-i18n="Calendar">Album</span></a>
            </li>

            {{-- <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div> --}}
            @else
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <!--  -->
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                            data-feather="more-horizontal"></i>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('dashboard') ? 'active' : '' }}" href="{{url('dashboard')}}"><i
                                data-feather="home"></i><span class="menu-title text-truncate"
                                data-i18n="Home">Home</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('prodi') ? 'active' : '' }}" href="{{url('prodi')}}"><i
                                data-feather="briefcase"></i><span class="menu-title text-truncate"
                                data-i18n="Profile">Prodi</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('album-akademik') ? 'active' : '' }}" href="{{url('album-akademik')}}"><i
                                data-feather="book"></i><span class="menu-title text-truncate"
                                data-i18n="Calendar">Album</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('alumni') ? 'active' : '' }}" href="{{url('alumni')}}"><i
                                data-feather="users"></i><span class="menu-title text-truncate"
                                data-i18n="Todo">Alumni</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center {{ Request::is('url-mahasiswa') ? 'active' : '' }}" href="{{url('user-mahasiswa')}}"><i
                                data-feather="archive"></i><span class="menu-title text-truncate"
                                data-i18n="Todo">Akun Mahasiswa</span></a>
                    </li>
                    {{-- <div class="mt-3 space-y-1">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div> --}}
                    @endif
                    <!--  <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Home">Home</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li> -->
                </ul>
                </li>
        </ul>
    </div>
</div>
