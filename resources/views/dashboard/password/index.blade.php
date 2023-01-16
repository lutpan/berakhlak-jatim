@extends('dashboard._layouts.sidebar')
@section('content')
    {{-- {{ $user->id_user }} --}}
    <h2 class="small-title">Setting</h2>
    <div class="card mb-5">
        <div class="card-body">
            <form method="post" action="{{ url('password/updatePassword', auth()->user()->id_user) }}">
                @method('put')
                @csrf
                {{-- <input class="form-control" type="text" value="{{ auth()->user()->id_user }}"> --}}
                {{-- ALERT BERHASIL TAMBAH DATA --}}
                {{-- ALERT BERHASIL TAMBAH DATA --}}
                {{-- <input class="form-control" type="text" name="id_user" id="id_user"
                value="{{ Auth::user()->id_user }}" /> --}}
                <div class="row">
                    @if (session()->has('success'))
                        <div class="alert alert-success mb-2" role="alert">
                            {{ session('success') }}
                    @endif
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8 col-md-9 col-lg-2">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @error('password')
                            {{ $message = 'Salah' }}
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-8 col-md-9 col-lg-2">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password_confirmation" required autocomplete="current-password">
                    </div>
                </div>
                <div class="mb-3 row mt-5">
                    <div class="ms-auto">
                        <button type="button" class="btn btn-background hover-outline mb-1"
                            onclick="history.back(-1)">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
