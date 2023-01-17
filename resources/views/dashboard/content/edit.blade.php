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
                <form method="post" action="{{ route('content.update', $content->path) }}" enctype="multipart/form-data">
                    {{-- {{ Auth::user() }} --}}
                    @method('put')
                    @csrf
                    {{-- Kategori Penguatan <input type="checkbox" name="kategori" id="kategori"><br> --}}
                    {{-- @foreach ($content as $c) --}}
                    <input class="form-control" type="hidden" name="id_user" id="id_user"
                        value="{{ $content->id_user }}" />
                    <input class="form-control" type="hidden" name="id_level" id="id_level"
                        value="{{ $content->id_level }}" />
                    <input class="form-control" type="hidden" name="id_content" id="id_content"
                        value="{{ $content->id_content }}" />
                    <div class="form-floating mb-3 w-10">
                        <select class="form-control" name="id_tahun" id="select2FloatingLabel">
                            <option label="&nbsp;" selected>Periode Tahun</option>
                            @foreach ($tahun as $t)
                                @if ($content->id_tahun == $t->id_tahun)
                                    <option value="{{ $t->id_tahun }}" selected>{{ $t->tahun }}</option>
                                @else
                                    <option value="{{ $t->id_tahun }}">{{ $t->tahun }}</option>
                                @endif
                            @endforeach
                        </select>
                        <label>Periode Tahun</label>
                    </div>
                    <h2 class="small-title">Nama Budaya Kerja</h2>
                    <div class="form-floating mb-3">
                        <input class="form-control  @error('nama_budaya_kerja') is-invalid @enderror" type="text"
                            name="nama_budaya_kerja" id="nama_budaya_kerja" placeholder="Nama Budaya Kerja"
                            value="{{ $content->nama_budaya_kerja }}" />
                        <label>Nama Budaya Kerja</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <h2 class="small-title">Kategori Penguatan</h2>
                    <div class="form-floating mb-3">
                        <input class="form-control @error('path') is-invalid @enderror" type="hidden" name="path"
                            id="path" placeholder="Path" value="{{ $content->path }}" readonly />
                        @error('path')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        {{-- <label>Path</label> --}}
                    </div>
                    <div class="form-floating mb-3 w-100">
                        <select class="form-control" name="id_kategori" id="select2FloatingLabel">
                            <option label="&nbsp;" selected>Pilih Kategori Penguatan</option>
                            @foreach ($kategori as $k)
                                @if ($content->id_kategori == $k->id_kategori)
                                    <option value="{{ $k->id_kategori }}" selected>{{ $k->name }}</option>
                                @else
                                    <option value="{{ $k->id_kategori }}">{{ $k->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <label>Kategori Penguatan</label>
                    </div>
                    <div class="row g-2">
                        <div class="col">
                            <i class="d-inline" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Uraikan latar belakang pembentukan budaya kerja, kesesuaian latar belakang dengan akronim BerAKHLAK yang dipilih. max: 400 kata."></i>
                            <h2 class="d-inline small-title">Latar Belakang</h2>
                            <h6 class="d-inline" id="counter">0 / 400 Kata</h6>
                            @error('latar_belakang')
                                <h6 class="text" style="color: red">{{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="hidden" name="latar_belakang"
                            value="{{ old('latar_belakang', $content->latar_belakang) }}" readonly>
                        <div class="html-editor sh-45" id="editor">{!! old('latar_belakang', $content->latar_belakang) !!}</div>
                    </div>
                    <div class="form-group">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <i class="d-inline" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Jelaskan secara singkat sasaran pembentukan budaya kerja. max: 200 kata."></i>
                                <h2 class="d-inline small-title">Sasaran</h2>
                                <h6 id="counter1" class="d-inline">0 / 200 Kata</h6>
                                @error('sasaran')
                                    <h6 class="text" style="color: red">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <i class="d-inline" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Jelaskan Indikator kinerja. max: 150 kata."></i>
                                <h2 class="d-inline small-title">Indikator Kinerja</h2>
                                <h6 id="counter2" class="d-inline">0 / 150 Kata</h6>
                                @error('indikator_kinerja')
                                    <h6 class="text" style="color: red">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <i class="d-inline" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Jelaskan target dari budaya kerja. max: 150 kata."></i>
                                <h2 class="d-inline small-title">Target</h2>
                                <h6 id="counter3" class="d-inline">0 / 150 Kata</h6>
                                @error('target')
                                    <h6 class="text" style="color: red">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="hidden" name="sasaran" value="{{ old('sasaran', $content->sasaran) }}">
                                {{-- <input type="hidden" name="sasaran" value="{!! $content->sasaran !!}"> --}}
                                <div class="html-editor sh-25" id="editor1">{!! old('sasaran', $content->sasaran) !!}
                                </div>
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="hidden" name="indikator_kinerja"
                                    value="{{ old('indikator_kinerja', $content->indikator_kinerja) }}">
                                <div class="html-editor sh-25" id="editor2">{!! old('indikator_kinerja', $content->indikator_kinerja) !!}</div>
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="hidden" name="target" value="{{ old('target', $content->target) }}">
                                <div class="html-editor sh-25" id="editor3">{!! old('target', $content->target) !!}</div>
                            </div>
                        </div>
                        {{-- <div class="row g-2"> --}}
                        {{-- <div class="row g-2"> --}}
                        <div class="col-md-4">
                            <i class="d-inline" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
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
                        <input type="hidden" name="kondisi_sebelum"
                            value="{{ old('kondisi_sebelum', $content->kondisi_sebelum) }}">
                        <div class="html-editor sh-25" id="editor4">{!! old('kondisi_sebelum', $content->kondisi_sebelum) !!}</div>
                    </div>
                    <div class="col-md-4">
                        <i class="d-inline" data-acorn-icon="info-circle" data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Jelaskan implementasi terkait pelaksanaan Budaya Kerja. max: 500 kata."></i>
                        <h2 class="d-inline small-title">Implementasi</h2>
                        <h6 class="d-inline" id="counter5">0 / 500 Kata</h6>
                        @error('implementasi')
                            <h6 class="text" style="color: red">{{ $message }}</h6>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="hidden" name="implementasi"
                            value="{{ old('implementasi', $content->implementasi) }}">
                        <div class="html-editor sh-55" id="editor5">{!! old('implementasi', $content->implementasi) !!}</div>
                    </div>
                    <div class="form-floating mb-3">
                        {{-- <div class="col-md-4">  --}}
                        <i data-acorn-icon="info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Uraian kondisi setelah adanya Budaya Kerja. max:200 kata"></i>
                        <h2 class="d-inline small-title">Kondisi Sesudah</h2>
                        <h6 class="d-inline" id="counter6">0 / 200 Kata</h6>
                        @error('kondisi_sesudah')
                            <h6 class="text" style="color: red">{{ $message }}</h6>
                        @enderror
                        {{-- </div>  --}}
                        <input type="hidden" name="kondisi_sesudah"
                            value="{{ old('kondisi_sesudah', $content->kondisi_sesudah) }}">
                        <div class="html-editor sh-25" id="editor6">{!! old('kondisi_sesudah', $content->kondisi_sesudah) !!}</div>
                        {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <i data-acorn-icon="info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Jelaskan secara singkat kesimpulan. max: 150 kata"></i>
                        <h2 class="d-inline small-title">Kesimpulan</h2>
                        <h6 class="d-inline" id="counter7">0 / 150 Kata</h6>
                        @error('kesimpulan')
                            <h6 class="text" style="color: red">{{ $message }}</h6>
                        @enderror
                        <div class="form-floating mb-3">
                            <input type="hidden" name="kesimpulan"
                                value="{{ old('kesimpulan', $content->kesimpulan) }}">
                            <div class="html-editor sh-23" id="editor7">{!! old('kesimpulan', $content->kesimpulan) !!}</div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control @error('link') is-invalid @enderror" type="url" name="link"
                                id="link" value="{{ $content->link }}">
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
                        <div class="form-floating mb-3 col-md-6">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="image" name="image"
                                    onchange="preview()" value="{{ $content->image }}">
                                <label class="input-group-text" for="image">Upload</label>
                            </div>
                            @if ($content->image)
                                <img src="{{ asset($content->image) }}"
                                    class="img-preview img-fluid rounded mb-4 me-1 sh-19">
                            @else
                                <img class="img-preview img-fluid rounded mb-4 me-1 sh-19">
                            @endif
                        </div>
                    </div>
                    {{-- <div class="input-group mb-3">
                        <input type="file" class="form-control" id="image" name="image" onchange="preview()">
                        @error('image')
                            <div class="invalid-feedback">
                            </div>
                        @enderror
                        <label class="input-group-text" for="image">Upload</label>
                    </div>
                    <input type="hidden" name="oldImage" value="{{ $content->image }}">
                    @if ($content->image)
                        <img src="{{ asset('storage/' . $content->image) }}" class="img-preview img-fluid mb-3 col-sm-5">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif --}}

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
