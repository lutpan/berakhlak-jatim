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
                    <input class="form-control" type="hidden" name="id_level" id="id_level"
                        value="{{ Auth::user()->id_level }}" />
                    <div class="form-floating mb-3 w-10">
                        <select class="form-control @error('{{ $t->id_tahun }}') is-invalid @enderror" name="id_tahun"
                            id="select2FloatingLabel">
                            <option label="&nbsp;" selected>Pilih Periode Tahun</option>
                            @foreach ($tahun as $t)
                                <option value="{{ $t->id_tahun }}" selected>{{ $t->tahun }}</option>
                            @endforeach
                        </select>
                        @error('{{ $t->id_tahun }}')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Periode Tahun</label>
                    </div>
                    <h2 class="small-title">Nama Budaya Kerja</h2>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nama_budaya_kerja') is-invalid @enderror"
                            name="nama_budaya_kerja" id="nama_budaya_kerja" placeholder="Nama Budaya Kerja"
                            value="{{ old('nama_budaya_kerja') }}" />
                        @error('nama_budaya_kerja')
                            <div class="invalid-feedback">
                                Nama wajib di isi.
                            </div>
                        @enderror
                        <label>Nama Budaya Kerja</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control @error('path') is-invalid @enderror" type="hidden" name="path"
                            id="path" value="{{ old('path') }}" readonly />
                        @error('path')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                    </div>
                    <h2 class="small-title">Kategori Penguatan</h2>
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
                    <div class="form-floating mb-3">
                        <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Jelaskan Latar Belakang pembentukan budaya kerja. max: 400 kata."></i>
                        <h2 class="d-inline mb-1 small-title">Latar Belakang</h2>
                        <input type="hidden" name="latar_belakang" value="{{ old('latar_belakang') }}">
                        <h6 class="d-inline " id="counter">0 / 400 Kata</h6>
                        @error('latar_belakang')
                            <h6 class="text" style="color: red">{{ $message }}</h6>
                        @enderror
                        <div class="html-editor sh-55" id="editor">{!! old('latar_belakang') !!}</div>
                    </div>
                    <div class="form-group">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Jelaskan secara singkat sasaran pembentukan budaya kerja. max: 200 kata."></i>
                                <h2 class="d-inline small-title">Sasaran</h2>
                                <h6 id="counter1" class="d-inline">0 / 200 Kata</h6>
                                @error('sasaran')
                                    <h6 class="text" style="color: red">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Jelaskan Indikator kinerja. max: 150 kata."></i>
                                <h2 class="d-inline small-title">Indikator Kinerja</h2>
                                <h6 id="counter2" class="d-inline">0 / 150 Kata</h6>
                                @error('indikator_kinerja')
                                    <h6 class="text" style="color: red">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Jelaskan target dari budaya kerja. max: 150 kata."></i>
                                <h2 class="d-inline small-title">Target</h2>
                                <h6 id="counter3" class="d-inline">0 / 150 Kata</h6>
                                @error('target')
                                    <h6 class="text" style="color: red">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="hidden" name="sasaran" value="{{ old('sasaran') }}">
                                <div class="html-editor sh-25" id="editor1">{!! old('sasaran') !!}</div>
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="hidden" name="indikator_kinerja" value="{{ old('indikator_kinerja') }}">
                                <div class="html-editor sh-25" id="editor2">{!! old('indikator_kinerja') !!}</div>
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="hidden" name="target" value="{{ old('target') }}">
                                <div class="html-editor sh-25" id="editor3">{!! old('target') !!}</div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Uraikan kondisi sebelum adanya budaya kerja. max: 200 kata">></i>
                                    <h2 class="d-inline small-title">Kondisi sebelum</h2>
                                    <h6 class="d-inline" id="counter4">0 / 200 Kata</h6>
                                    @error('kondisi_sebelum')
                                        <h6 class="text" style="color: red">{{ $message }}</h6>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="hidden" name="kondisi_sebelum" value="{{ old('kondisi_sebelum') }}">
                                <div class="html-editor sh-25" id="editor4">{!! old('kondisi_sebelum') !!}</div>
                            </div>
                        </div>
                        <div class="col">
                            <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Jelaskan implementasi terkait pelaksanaan Budaya Kerja. max: 500 kata."></i>
                            <h2 class="d-inline small-title">Implementasi</h2>
                            <h6 class="d-inline" id="counter5">0 / 500 Kata</h6>
                            @error('implementasi')
                                <h6 class="text" style="color: red">{{ $message }}</h6>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="implementasi" value="{{ old('implementasi') }}">
                            <div class="html-editor sh-55" id="editor5">{!! old('implementasi') !!}</div>
                        </div>
                        <div class="form-floating mb-3">
                            <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Uraian kondisi setelah adanya Budaya Kerja. max:200 kata"></i>
                            <h2 class="d-inline small-title">Kondisi Sesudah</h2>
                            <h6 class="d-inline" id="counter6">0 / 200 Kata</h6>
                            @error('kondisi_sesudah')
                                <h6 class="text" style="color: red">{{ $message }}</h6>
                            @enderror
                            <input type="hidden" name="kondisi_sesudah" value="{{ old('kondisi_sesudah') }}">
                            <div class="html-editor sh-25" id="editor6">{!! old('kondisi_sesudah') !!}</div>
                        </div>
                        <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Jelaskan secara singkat kesimpulan. max: 150 kata"></i>
                        <h2 class="d-inline small-title">Kesimpulan</h2>
                        <h6 class="d-inline" id="counter7">0 / 150 Kata</h6>
                        @error('kesimpulan')
                            <h6 class="text" style="color: red">{{ $message }}</h6>
                        @enderror
                        <div class="form-floating mb-3">
                            <input type="hidden" name="kesimpulan" value="{{ old('kesimpulan') }}">
                            <div class="html-editor sh-25" id="editor7">{!! old('kesimpulan') !!}</div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <i data-acorn-icon="info-circle" class="d-inline mb-1" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="contoh format link : https://www.youtube.com/watch?v=iDvpyKtg1Ww)."></i>
                                <h2 class="d-inline small-title">Link Youtube</h2>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="form-floating mb-3 col-md-6">
                                <input class="form-control @error('link') is-invalid @enderror" type="url"
                                    name="link" id="link" value="{{ old('link') }}"
                                    placeholder="Link Youtube">
                                @error('link')
                                    <div class="invalid-feedback">
                                        Kolom wajib di isi.
                                    </div>
                                @enderror
                                <label>Link Youtube Dokumentasi Budaya Kerja</label>
                            </div>
                            {{-- <div class="input-group mb-3">
                                <input type="file" class="form-control" id="nama_dokumentasi"
                                name="nama_dokumentasi[]" onchange="preview()" multiple>
                                @error('nama_dokumentasi')
                                <div class="invalid-feedback">
                                </div>
                                @enderror
                                <label class="input-group-text" for="nama_dokumentasi">Upload</label>
                            </div> --}}
                        </div>
                        <div class="col-md-6">
                            <i class="d-inline mb-1" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Upload flyer budaya kerja"></i>
                            <h2 class="d-inline small-title">Flyer/Poster</h2>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="image" name="image"
                                    onchange="preview()">
                                <label class="input-group-text" for="image">Upload</label>
                            </div>
                            <img class="img-preview img-fluid rounded mb-3 me-1 sh-19">
                            @error('image')
                                <div class="invalid-feedback">
                                </div>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-background hover-outline mb-1"
                            onclick="history.back(-1)">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Floating Label End -->


    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src={{ asset('js/multi-quill.js') }}></script>
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
