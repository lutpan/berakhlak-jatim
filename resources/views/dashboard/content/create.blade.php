@extends('dashboard._layouts.sidebar')

@section('judul_halaman')
    {{-- <div class="col-12 col-md-7"> --}}
    <h1 class="mb-0 pb-0 display-4" id="title">Form Budaya Kerja</h1>
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
                <form method="post" action="{{ route('content.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="hidden" name="id_user" id="id_user"
                        value="{{ Auth::user()->id_user }}" />
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nama_budaya_kerja') is-invalid @enderror"
                            name="nama_budaya_kerja" id="nama_budaya_kerja" placeholder="Nama Budaya Kerja"
                            value="{{ old('nama_budaya_kerja') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-content="Uraikan latar belakang pembentukan budaya kerja, kesesuaian latar belakang dengan akronim BerAKHLAK yang dipilih. max: 400 kata" />

                        @error('nama_budaya_kerja')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Nama Budaya Kerja</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control @error('path') is-invalid @enderror" type="text" name="path"
                            id="path" placeholder="Path" value="{{ old('path') }}" />
                        @error('path')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Path</label>
                    </div>
                    <div class="form-floating mb-3 w-100">
                        <select class="form-control @error('{{ $k->id_kategori }}') is-invalid @enderror" name="id_kategori"
                            id="select2FloatingLabel">
                            <option label="&nbsp;" selected>Pilih Kategori Penguatan</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id_kategori }}" selected>{{ $k->name }}</option>
                            @endforeach
                        </select>
                        @error('{{ $k->id_kategori }}')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Kategori Penguatan</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Uraikan latar belakang pembentukan budaya
                    kerja, kesesuaian
                    latar belakang dengan akronim BerAKHLAK yang dipilih. max: 400 kata.">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('latar_belakang') is-invalid @enderror" rows="3" type="text"
                            name="latar_belakang" id="latar_belakang" value="{{ old('latar_belakang') }}"></textarea>
                        @error('latar_belakang')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Latar Belakang</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Jelaskan secara singkat tujuan pembentukan budaya kerja. max: 200 kata.">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('tujuan') is-invalid @enderror" rows="3" type="text" name="tujuan"
                            id="tujuan" value="{{ old('tujuan') }}"></textarea>
                        @error('tujuan')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Tujuan</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Berisi kondisi hasil perubahan yang diwujudkan. max: 150 kata.">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('sasaran') is-invalid @enderror" rows="3" type="text" name="sasaran"
                            id="sasaran" value="{{ old('sasaran') }}"></textarea>
                        @error('sasaran')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Sasaran</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Uraikan kondisi sebelum adanya budaya kerja. max: 200 kata">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('kondisi_sebelum') is-invalid @enderror" rows="3" type="text"
                            name="kondisi_sebelum" id="kondisi_sebelum" value="{{ old('kondisi_sebelum') }}"></textarea>
                        @error('kondisi_sebelum')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Kondisi Sebelum</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Jelaskan terkain pelaksanaan Budaya Kerja. max: 500 kata.">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('implementasi') is-invalid @enderror" rows="3" type="text"
                            name="implementasi" id="implementasi" value="{{ old('implementasi') }}"></textarea>
                        @error('implementasi')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Implementasi</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Uraian kondisi setelah adanya Budaya Kerja. max:200 kata">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('kondisi_sesudah') is-invalid @enderror" rows="3" type="text"
                            name="kondisi_sesudah" id="kondisi_sesudah" value="{{ old('kondisi_sesudah') }}"></textarea>
                        @error('kondisi_sesudah')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Kondisi Sesudah</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Jelaskan secara singkat manfaat yang didapatkan setelah adanya budaya kerja. max: 150 kata">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('manfaat') is-invalid @enderror" rows="3" type="text" name="manfaat"
                            id="manfaat" value="{{ old('manfaat') }}"></textarea>
                        @error('manfaat')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Manfaat</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Uraikan peranan aktif pimpinan dalam penerapan Budaya Kerja. max: 150 kata.">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('peran_pimpinan') is-invalid @enderror" rows="3" type="text"
                            name="peran_pimpinan" id="peran_pimpinan" value="{{ old('peran_pimpinan') }}"></textarea>
                        @error('peran_pimpinan')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Peran Aktif Pimpinan</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Jelaskan strategi yang dilakukan untuk keberlanjutan penerapan budaya kerja. max: 200 kata.">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('monev') is-invalid @enderror" rows="3" type="text" name="monev"
                            id="monev" value="{{ old('monev') }}"></textarea>
                        @error('monev')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Monitoring & Evaluasi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('link') is-invalid @enderror" rows="3" type="text" name="link"
                            id="link" value="{{ old('link') }}"></textarea>
                        @error('link')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Link Youtube</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Uraikan latar belakang pembentukan budaya
                    kerja, kesesuaian
                    latar belakang dengan akronim BerAKHLAK yang dipilih. max: 400 kata.">
                        <i data-acorn-icon="info-circle"></i>
                    </button>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image" onchange="preview()">
                        @error('image')
                            <div class="invalid-feedback">
                            </div>
                        @enderror
                        <label class="input-group-text" for="image">Upload</label>
                    </div>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Floating Label End -->

    <script>
        // auto isi dari nama_budaya_kerja
        const nama_budaya_kerja = document.querySelector("#nama_budaya_kerja");
        const path = document.querySelector("#path");

        nama_budaya_kerja.addEventListener("keyup", function() {
            let prepath = nama_budaya_kerja.value;
            prepath = prepath.replace(/ /g, "-");
            path.value = prepath.toLowerCase();
        });

        function preview() {
            const image = document.querySelector('#image')
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
