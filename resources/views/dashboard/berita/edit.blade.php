@extends('dashboard._layouts.sidebar')

@section('judul_halaman')
    {{-- <div class="col-12 col-md-7"> --}}
    <h1 class="mb-0 pb-0 display-4" id="title">Form Portal Berita</h1>
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
                <form method="post" action="{{ route('news.update', $news->path_berita) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('judul_berita') is-invalid @enderror"
                            name="judul_berita" id="judul_berita" placeholder="Nama Budaya Kerja"
                            value="{{ $news->judul_berita }}" />
                        @error('judul_berita')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Judul Berita</label>
                    </div>
                    <div class="row g-2">
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control @error('headline_berita') is-invalid @enderror"
                                name="headline_berita" id="headline_berita" placeholder="Nama Budaya Kerja"
                                value="{{ $news->headline_berita }}" />
                            @error('headline_berita')
                                <div class="invalid-feedback">
                                    Kolom wajib di isi.
                                </div>
                            @enderror
                            <label>Headline</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="date" class="form-control @error('tanggal_berita') is-invalid @enderror"
                                name="tanggal_berita" id="tanggal_berita" placeholder="Tanggal"
                                value="{{ $news->tanggal_berita }}" />
                            @error('tanggal_berita')
                                <div class="invalid-feedback">
                                    Kolom wajib di isi.
                                </div>
                            @enderror
                            <label>Tanggal</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control @error('path_berita') is-invalid @enderror" type="hidden"
                            name="path_berita" id="path" placeholder="path_berita" value="{{ $news->path_berita }}"
                            readonly />
                        @error('path_berita')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Path</label>
                    </div>
                    <div class="form-floating mb-3">
                        {{-- <textarea class="html-editor sh-19 col-md-12" name="isi_berita" id="quillEditor"></textarea> --}}
                        <input type="hidden" name="isi_berita">
                        <div class="html-editor sh-55" id="editor">{!! $news->isi_berita !!}</div>
                    </div>
                    <div class="form-floating mb-3">
                        {{-- <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Foto</label> --}}
                        <div class="col-sm-8 col-md-4 col-lg-10">
                            <input type="file" class="form-control @error('foto_berita') is-invalid @enderror mb-3"
                                id="foto_berita" name="foto_berita" onchange="preview()">
                            @if ($news->foto_berita)
                                <img src="{{ asset('storage/' . $news->foto_berita) }}"
                                    class="img-preview img-fluid rounded mb-4 me-1 sh-19">
                            @else
                                <img class="img-preview img-fluid rounded mb-4 me-1 sh-19">
                            @endif
                        </div>
                    </div>
                    {{-- <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-background hover-outline mb-1"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Uraikan latar belakang pembentukan budaya kerja, kesesuaian latar belakang dengan akronim BerAKHLAK yang dipilih. max: 400 kata.">
                            <i data-acorn-icon="info-circle"></i>
                        </button> --}}
                    {{-- <div class="input-group mb-3">
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                id="image" name="image" onchange="preview()">
                            @error('image')
                                <div class="invalid-feedback">
                                </div>
                            @enderror
                            <label class="input-group-text" for="image">Upload</label>
                            <img class="img-preview img-fluid">
                        </div> --}}
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
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: {
                    container: [
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote'],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }],
                        [{
                            'indent': '-1'
                        }, {
                            'indent': '+1'
                        }],
                        [{
                            'header': [1, 2, 3, 4, 5, 6, false]
                        }],
                        [{
                            'align': []
                        }],

                        ['clean'],
                    ]
                }
            }
        });

        var form = document.querySelector('form');

        form.onsubmit = function() {
            // Populate hidden form on submit
            var about = document.querySelector('input[name=isi_berita]');
            about.value = quill.root.innerHTML;

            console.log("Submitted", $(form).serialize(), $(form).serializeArray());


        };




        // auto isi dari judul_berita
        const judul_berita = document.querySelector("#judul_berita");
        const path = document.querySelector("#path");

        judul_berita.addEventListener("keyup", function() {
            let prepath = judul_berita.value;
            prepath = prepath.replace(/ /g, "-");
            path.value = prepath.toLowerCase();
        });

        function preview() {
            const image = document.querySelector('#foto_berita')
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
