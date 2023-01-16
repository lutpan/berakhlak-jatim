@extends('dashboard._layouts.sidebar')

@section('judul_halaman')
    {{-- <div class="col-12 col-md-7"> --}}
    <h1 class="mb-0 pb-0 display-4" id="title">Slider</h1>
    {{-- <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb"> --}}
    </nav>
    {{-- </div> --}}
@endsection

@section('content')
    <!-- Floating Label Start -->
    <section class="scroll-section" id="floatingLabel">
        {{-- <h2 class="small-title">Floating Label</h2> --}}
        <div class="card mb-5">
            <div class="card-body">
                <form method="post" action="{{ route('slider.update', $slider->id_slider) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <input class="form-control" type="hidden" name="id_user" id="id_user"
                        value="{{ Auth::user()->id_user }}" /> --}}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('judul_slider') is-invalid @enderror"
                            name="judul_slider" id="judul_slider" placeholder="Link Slider"
                            value="{{ $slider->judul_slider }}" data-bs-toggle="tooltip" data-bs-placement="top" />
                        @error('judul_slider')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Judul Slider</label>
                    </div>
                    <div class="row g-2">
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control @error('link_slider') is-invalid @enderror"
                                name="link_slider" id="link_slider" placeholder="Link Slider"
                                value="{{ $slider->link_slider }}" data-bs-toggle="tooltip" data-bs-placement="top" />
                            @error('link_slider')
                                <div class="invalid-feedback">
                                    Kolom wajib di isi.
                                </div>
                            @enderror
                            <label>Link Slider</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control @error('urutan_slider') is-invalid @enderror" type="number"
                                name="urutan_slider" id="path" placeholder="urutan_slider"
                                value="{{ $slider->urutan_slider }}" />
                            @error('path_berita')
                                <div class="invalid-feedback">
                                    Kolom wajib di isi.
                                </div>
                            @enderror
                            <label>Urutan Slider</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        {{-- <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Foto</label> --}}
                        <div class="col-sm-12">
                            <input type="file" class="form-control @error('foto_slider') is-invalid @enderror mb-4"
                                id="foto_slider" name="foto_slider" onchange="preview()">
                            @if ($slider->foto_slider)
                                <img src="{{ asset($slider->foto_slider) }}"
                                    class="img-preview img-fluid rounded mb-4 me-1 sh-19">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <img class="img-preview img-fluid rounded mb-4 me-1 sh-19" />
                        </div>
                    </div>
                    <div class="col-12 mb-3 ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" name="is_aktif"
                                value={{ $slider->is_aktif }} />
                            <label class="form-check-label" for="gridCheck">Aktif?</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-background hover-outline mb-1"
                        onclick="history.back(-1)">Cancel</button>
                    {{-- <button type="button" class="btn btn-background hover-outline mb-1"
                        onclick="cekHasil()">Cancel</button> --}}
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Floating Label End -->
    <script>
        function preview() {
            const image = document.querySelector('#foto_slider')
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
