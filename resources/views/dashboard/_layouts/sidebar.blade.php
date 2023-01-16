<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical" }}'>

@extends('dashboard._layouts.head')

<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex" data-vertical-unpinned="10000" data-vertical-mobile="600"
            data-disable-pinning="true">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                <div class=" position-relative">
                    <a href="dashboard">
                        <!-- Logo can be added directly -->
                        <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

                        <!-- Or added via css to provide different ones for different color themes -->
                        {{-- <div class="img"></div> --}}
                    </a>
                </div>
                <!-- Logo End -->

                <!-- User Menu Start -->
                <div class="user-container d-flex">
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @if (Auth::user()->avatar)
                            <img class="profile" alt="profile" src="{{ asset(Auth::user()->avatar) }}" />
                        @else
                            <img class="profile" alt="profile" src="{{ asset('img/logo/logo-jatim.png') }}" />
                        @endif
                        <div class="name">{{ Auth::user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
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
                    {{-- <li class="list-inline-item">
                        <a href="#" id="pinButton" class="pin-button">
                            <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                            <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
                        </a>
                    </li> --}}
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
                            <a href="{{ Route('dashboard') }}">
                                <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                                <span class="label">Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('profile') }}">
                                <i data-acorn-icon="user" class="icon" data-acorn-size="18"></i>
                                <span class="label">Profil</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('content.index') }}">
                                <i data-acorn-icon="clipboard" class="icon" data-acorn-size="18"></i>
                                <span class="label">Proposal</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('password') }}">
                                <i data-acorn-icon="slash" class="icon" data-acorn-size="18"></i>
                                <span class="label">Reset Password</span>
                            </a>
                        </li>
                        {{-- admin --}}
                        <li>
                            @can('admin')
                                <span class="text-muted">Administrator</span>
                            <li>
                                <a href="{{ Route('indexDataAdmin') }}">
                                    <i data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Data Dukung</span>
                                </a>
                            </li>
                            <li>
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
                            <li>
                                <a href="{{ route('slider.index') }}">
                                    <i data-acorn-icon="image" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Slider</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ Route('news.index') }}">
                                    <i data-acorn-icon="news" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Berita</span>
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
        <!-- Theme Settings Modal Start -->
        {{-- <div class="modal fade modal-right scroll-out-negative" id="settings" data-bs-backdrop="true"
            tabindex="-1" role="dialog" aria-labelledby="settings" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable full" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Theme Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="scroll-track-visible">
                            <div class="mb-5" id="color">
                                <label class="mb-3 d-inline-block form-label">Color</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="blue-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT BLUE</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="blue-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK BLUE</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-teal"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="teal-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT TEAL</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-teal"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="teal-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK TEAL</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-sky"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="sky-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT SKY</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-sky"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="sky-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK SKY</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="red-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT RED</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="red-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK RED</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="green-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT GREEN</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="green-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK GREEN</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-lime"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="lime-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT LIME</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-lime"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="lime-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK LIME</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="pink-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT PINK</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="pink-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK PINK</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="purple-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="purple-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK PURPLE</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="navcolor">
                                <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="default"
                                        data-parent="navcolor">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DEFAULT</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="light"
                                        data-parent="navcolor">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-secondary figure-light top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="dark"
                                        data-parent="navcolor">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-muted figure-dark top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="mb-5" id="placement">
                                <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="horizontal"
                                        data-parent="placement">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">HORIZONTAL</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="vertical"
                                        data-parent="placement">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left"></div>
                                            <div class="figure figure-secondary right"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">VERTICAL</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="mb-5" id="behaviour">
                                <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned"
                                        data-parent="behaviour">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left large"></div>
                                            <div class="figure figure-secondary right small"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">PINNED</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned"
                                        data-parent="behaviour">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left"></div>
                                            <div class="figure figure-secondary right"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">UNPINNED</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="mb-5" id="layout">
                                <label class="mb-3 d-inline-block form-label">Layout</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid"
                                        data-parent="layout">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">FLUID</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed"
                                        data-parent="layout">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom small"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">BOXED</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="mb-5" id="radius">
                                <label class="mb-3 d-inline-block form-label">Radius</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded"
                                        data-parent="radius">
                                        <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">ROUNDED</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="standard"
                                        data-parent="radius">
                                        <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">STANDARD</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="flat"
                                        data-parent="radius">
                                        <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">FLAT</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Theme Settings & Niches Buttons Start -->
        {{-- <div class="settings-buttons-container">
            <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal"
                data-bs-target="#settings" id="settingsButton">
                <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
                    <i data-acorn-icon="paint-roller" class="position-relative"></i>
                </span>
            </button>
            <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal"
                data-bs-target="#niches" id="nichesButton">
                <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Niches">
                    <i data-acorn-icon="toy" class="position-relative"></i>
                </span>
            </button>
        </div> --}}
        <!-- Theme Settings & Niches Buttons End -->
        <!-- Theme Settings Modal End -->
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
