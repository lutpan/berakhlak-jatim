@extends('dashboard._layouts.sidebar')
@section('judul_halaman')
    <h1 class="mb-0 pb-0 display-4" id="title">Profile Setting</h1>
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-xl-4 col-xxl-3">
            <h2 class="small-title">Profile</h2>
            @if (session()->has('success'))
                <!-- Additional Content Start -->
                <div class="alert alert-success" role="alert">
                    {{-- {{ session('success') }} --}}
                    <h4 class="alert-heading">Berhasil!</h4>
                    <p>
                    </p>
                </div>
                <!-- Additional Content End -->
            @endif
            <div class="card mb-5">
                <div class="card-body">
                    <div class="d-flex align-items-center flex-column mb-4">
                        <div class="d-flex align-items-center flex-column">
                            <div class="sw-13 position-relative mb-3">
                                @if ($user->avatar)
                                    <img src="{{ asset($user->avatar) }}" class="img-fluid rounded-xl">
                                @else
                                    <img src="img/logo/logo-jatim.png" class="img-fluid rounded-xl">
                                @endif
                            </div>
                            <div class="h5 mb-1"> {{ $user->name }}</div>
                            <div class="text-muted">{{ $user->bio }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tab-pane" id="aboutTab" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <p class="text-small text-muted mb-2">Alamat</p>
                                        <p>
                                            <i data-acorn-icon="pin" class="me-1"></i>
                                            {{ $user->alamat }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-small text-muted mb-2">Kontak</p>
                                        <a href="#" class="d-block body-link mb-1">
                                            <i data-acorn-icon="phone" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">{{ $user->telfon }}</span>
                                        </a>
                                        <a href="#" class="d-block body-link">
                                            <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">{{ $user->email }}</span>
                                        </a>
                                    </div>
                                    <div class=" d-flex align-items-start justify-content-end">
                                        <a href="profile/setting/{{ $user->id_user }}"
                                            class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                                            <i data-acorn-icon="edit-square"></i>
                                            <span>Edit</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="nav flex-column" role="tablist">
                        <div class="row">
                            <div class="col-12">
                                <a class="nav-link active px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                    href="#overviewTab" role="tab">
                                    <i data-acorn-icon="activity" class="me-2" data-acorn-size="17"></i>
                                    <span class="align-middle">Overview</span>
                                </a>
                            </div>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#projectsTab" role="tab">
                                <i data-acorn-icon="office" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Projects</span>
                            </a>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#permissionsTab" role="tab">
                                <i data-acorn-icon="lock-off" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Permissions</span>
                            </a>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#friendsTab" role="tab">
                                <i data-acorn-icon="heart" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Friends</span>
                            </a>
                            <a class="nav-link px-0" data-bs-toggle="tab" href="#aboutTab" role="tab">
                                <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">About</span>
                            </a>

                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
@endsection
