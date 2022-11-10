@extends('dashboard._layouts.sidebar')
@section('judul_halaman')
    <h1 class="mb-0 pb-0 display-4" id="title">Profile Setting</h1>
    {{-- </div> --}}
@endsection
@section('content')
    {{-- {{ $user->id_user }} --}}
    <h2 class="small-title">Setting</h2>
    <div class="card mb-5">
        <div class="card-body">
            <form method="post" action="{{ url('profile/updateSetting/' . $user->id_user) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input class="form-control" type="text" name="id_user" id="id_user"
                    value="{{ Auth::user()->id_user }}" />
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Nama Instansi</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" value="{{ $user->name }}" name="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" value="{{ $user->username }}" name="username">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" value="{{ $user->password }}" name="password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">No. Telfon</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" value="{{ $user->telfon }}" name="telfon"
                            placeholder="+62 ">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" name="alamat" value="{{ $user->alamat }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Bio</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <textarea class="form-control" rows="3" name="bio">{{ $user->bio }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="email" class="form-control" value="{{ $user->email }}"
                            placeholder="example@gmail.com" name="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Avatar</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar"
                            name="avatar" onchange="preview()">
                        @if ($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" class="img-preview img-fluid mb-3 col-sm-5">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                    </div>
                    @error('avatar')
                        <div class="invalid-feedback">
                        </div>
                    @enderror
                    <input type="hidden" name="oldImage" value="{{ $user->avatar }}">
                </div>
                <div class="mb-3 row mt-5">
                    <div class="ms-auto">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function preview() {
            const image = document.querySelector('#avatar')
            const imgPrev = document.querySelector('.img-preview')

            imgPrev.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPrev.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
