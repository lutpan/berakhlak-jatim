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
                        value="{{ Auth::user()->id_user }}" />
                    <input class="form-control" type="hidden" name="id_content" id="id_content"
                        value="{{ $content->id_content }}" />
                    <div class="form-floating mb-3">
                        <input class="form-control  @error('nama_budaya_kerja') is-invalid @enderror" type="text"
                            name="nama_budaya_kerja" id="nama_budaya_kerja" placeholder="Nama Budaya Kerja"
                            value="{{ $content->nama_budaya_kerja }}" />
                        <label>Nama Budaya Kerja</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control @error('path') is-invalid @enderror" type="text" name="path"
                            id="path" placeholder="Path" value="{{ $content->path }}" />
                        @error('path')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Path</label>
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
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('nama_budaya_kerja') is-invalid @enderror" rows="3" type="text"
                            name="latar_belakang" id="latar_belakang">'{{ $content->latar_belakang }}'</textarea>
                        <label>Latar Belakang</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('nama_budaya_kerja') is-invalid @enderror" rows="3" type="text"
                            name="tujuan" id="tujuan">'{{ $content->tujuan }}'</textarea>
                        <label>Tujuan</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('nama_budaya_kerja') is-invalid @enderror" rows="3" type="text"
                            name="sasaran" id="sasaran">'{{ $content->sasaran }}'</textarea>
                        <label>Sasaran</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('nama_budaya_kerja') is-invalid @enderror" rows="3" type="text"
                            name="kondisi_sebelum" id="kondisi_sebelum">'{{ $content->kondisi_sebelum }}'</textarea>
                        <label>Kondisi Sebelum</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('nama_budaya_kerja') is-invalid @enderror" rows="3" type="text"
                            name="implementasi" id="implementasi">'{{ $content->implementasi }}'</textarea>
                        <label>Implementasi</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('nama_budaya_kerja') is-invalid @enderror" rows="3" type="text"
                            name="kondisi_sesudah" id="kondisi_sesudah">'{{ $content->kondisi_sesudah }}'</textarea>
                        <label>Kondisi Sesudah</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('manfaat') is-invalid @enderror" rows="3" type="text" name="manfaat"
                            id="manfaat">'{{ $content->manfaat }}'</textarea>
                        <label>Manfaat</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('peran_pimpinan') is-invalid @enderror" rows="3" type="text"
                            name="peran_pimpinan" id="peran_pimpinan">'{{ $content->peran_pimpinan }}'</textarea>
                        <label>Peran Aktif Pimpinan</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('monev') is-invalid @enderror" rows="3" type="text" name="monev"
                            id="monev">'{{ $content->monev }}'</textarea>
                        <label>Monitoring & Evaluasi</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control  @error('link') is-invalid @enderror" type="text" name="link" id="link">'{{ $content->link }}'</textarea>
                        <label>Link video Youtube</label>
                        {{-- Nama Budaya Kerja <input type="text" name="nama_budaya_kerja" id="nama_budaya_kerja"><br> --}}
                    </div>
                    <div class="input-group mb-3">
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
                    @endif
                    {{-- @endforeach --}}
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Floating Label End -->
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
