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
                                    <img src="{{ asset('storage/' . $user->avatar) }}" class="img-fluid rounded-xl"
                                        alt="thumb">
                                @else
                                    <img src="img/logo/logo-jatim.png" class="img-fluid rounded-xl" alt="thumb">
                                @endif
                            </div>
                            <div class="h5 mb-0"> {{ $user->name }}</div>
                            <div class="text-muted">{{ $user->bio }}</div>
                            <div class="text-muted">
                                <i data-acorn-icon="pin" class="me-1"></i>
                                <span class="align-middle">{{ $user->alamat }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="nav flex-column" role="tablist">
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
                    </div>
                    <div class=" d-flex align-items-start justify-content-end">
                        <a href="profile/setting/{{ $user->id_user }}"
                            class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                            <i data-acorn-icon="edit-square"></i>
                            <span>Edit</span>
                        </a>
                        {{-- <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                            <i data-acorn-icon="edit-square"></i>
                            <span>Edit</span>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="col-12 col-xl-8 col-xxl-9 mb-5 tab-content">
            <div class="tab-pane fade show active" id="overviewTab" role="tabpanel">
                <h2 class="small-title">Stats</h2>
                <div class="mb-5">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Projects</span>
                                        <i data-acorn-icon="office" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">ACTIVE</div>
                                    <div class="cta-1 text-primary">14</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Tasks</span>
                                        <i data-acorn-icon="check-square" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">PENDING</div>
                                    <div class="cta-1 text-primary">153</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Notes</span>
                                        <i data-acorn-icon="file-empty" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">RECENT</div>
                                    <div class="cta-1 text-primary">24</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Views</span>
                                        <i data-acorn-icon="screen" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">THIS MONTH</div>
                                    <div class="cta-1 text-primary">524</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
