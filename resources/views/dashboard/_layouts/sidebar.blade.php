<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical" }}'>

@extends('dashboard._layouts.head')

<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex" data-vertical-unpinned="10000" data-vertical-mobile="600"
            data-disable-pinning="true">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                <div class="logo position-relative">
                    <a href="dashboard">
                        <!-- Logo can be added directly -->
                        <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

                        <!-- Or added via css to provide different ones for different color themes -->
                        <div class="img"></div>
                    </a>
                </div>
                <!-- Logo End -->

                <!-- User Menu Start -->
                <div class="user-container d-flex">
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @if (Auth::user()->avatar)
                            <img class="profile" alt="profile" src="{{ asset('storage/' . Auth::user()->avatar) }}" />
                        @else
                            <img class="profile" alt="profile" src="img/logo/logo-jatim.png" />
                        @endif
                        <div class="name">{{ Auth::user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="help" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Docs</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="gear" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Menu End -->
                <!-- Icons Menu Start -->
                {{-- {{ Auth::user()->name }} --}}
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a href="#" id="pinButton" class="pin-button">
                            <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                            <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" id="colorButton">
                            <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                            <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
                        </a>
                    </li>
                </ul>
                <!-- Icons Menu End -->
                {{-- @if (Auth::check()) --}}
                <!-- Menu Start -->
                <div class="menu-container flex-grow-1">
                    <ul id="menu" class="menu">
                        {{-- {{ Auth::user()->username }} --}}
                        {{-- {{ Auth::id() }} --}}
                        <li>
                            <a href="dashboard">
                                <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                                <span class="label">Dashboards</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('profile') }}">
                                <i data-acorn-icon="user" class="icon" data-acorn-size="18"></i>
                                <span class="label">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('content.index') }}">
                                <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                                <span class="label">Content</span>
                            </a>
                        </li>
                        {{-- user --}}
                        <li>
                            @can('admin')
                                <h6 class="text-muted"><span>Administrator</span></h6>
                                <a href="users">
                                    <i data-acorn-icon="user" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="kategori">
                                    <i data-acorn-icon="list" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Kategori</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
                <!-- Menu End -->
                {{-- @endif --}}
            </div>
            <div class="nav-shadow"></div>
        </div>

        <main>
            <div class="container">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        @yield('judul_halaman')
                        <!-- Title End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Content Start -->
                @yield('content')
                <!-- Content End -->
            </div>
        </main>
        <!-- Layout Footer Start -->
        <footer>
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <p class="mb-0 text-muted text-medium">BerAKHLAK Jatim 2022</p>
                        </div>
                        <div class="col-sm-6 d-none d-sm-block">
                            <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="https://ro-organisasi.jatimprov.go.id/" target="_blank"
                                        class="btn-link">Biro
                                        Organisasi Sekretariat Daerah Provinsi Jawa Timur</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Layout Footer End -->
    </div>

    @extends('dashboard._layouts.footer')
</body>

</html>
