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
                <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="hidden" name="id_user" id="id_user"
                        value="{{ Auth::user()->id_user }}" />
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('judul_berita') is-invalid @enderror"
                            name="judul_berita" id="judul_berita" placeholder="Judul Berita"
                            value="{{ old('judul_berita') }}" data-bs-toggle="tooltip" data-bs-placement="top" />
                        @error('judul_berita')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        <label>Judul Berita</label>
                    </div>
                    <div class="row g-2">
                        <div class="form-floating mb-3 col-md-6">
                            <input type="date" class="form-control @error('tanggal_berita') is-invalid @enderror"
                                name="tanggal_berita" id="tanggal_berita" placeholder="Tanggal Berita"
                                value="{{ old('tanggal_berita') }}" />
                            @error('tanggal_berita')
                                <div class="invalid-feedback">
                                    Kolom wajib di isi.
                                </div>
                            @enderror
                            <label>Tanggal</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control @error('headline_berita') is-invalid @enderror"
                                name="headline_berita" id="headline_berita" placeholder="Headline Berita"
                                value="{{ old('headline_berita') }}" data-bs-toggle="tooltip" data-bs-placement="top" />
                            @error('headline_berita')
                                <div class="invalid-feedback">
                                    Kolom wajib di isi.
                                </div>
                            @enderror
                            <label>Headline</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input class="form-control @error('path_berita') is-invalid @enderror" type="hidden"
                            name="path_berita" id="path" value="{{ old('path_berita') }}" readonly />
                        @error('path_berita')
                            <div class="invalid-feedback">
                                Kolom wajib di isi.
                            </div>
                        @enderror
                        {{-- <label>Path</label> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <input type="hidden" name="isi_berita">
                        <div class="html-editor sh-55" id="editor"></div>
                    </div>
                    <div class="form-floating mb-3">
                        <div class="col-sm-8 col-md-4 col-lg-10">
                            <input type="file" class="form-control @error('foto_berita') is-invalid @enderror mb-3"
                                id="foto_berita" name="foto_berita" onchange="preview()">
                            <img class="img-preview img-fluid rounded mb-3 me-1 sh-19">
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

        // var form = document.querySelector('form');

        // form.onsubmit = function() {
        //     // Populate hidden form on submit
        //     var about = document.querySelector('input[name=isi_berita]');
        //     about.value = quill.root.innerHTML;
        // };
        quill.on('text-change', function(delta, oldDelta, source) {
            document.querySelector("input[name='isi_berita']").value = quill.root.innerHTML;
        });


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
