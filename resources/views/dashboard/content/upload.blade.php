@extends('dashboard._layouts.sidebar')

@section('judul_halaman')
    {{-- <div class="col-12 col-md-7"> --}}
    <h1 class="mb-0 pb-0 display-4" id="title">Data Pendukung Budaya Kerja</h1>
    {{-- <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb"> --}}
    </nav>
    {{-- </div> --}}
@endsection

@section('content')
    <section class="scroll-section" id="textFiles">
        {{-- <h2 class="small-title">Upload Data Pendukung </h2> --}}
        <div class="card mb-5">
            <div class="card-body">
                {{-- @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br />
                        @endforeach
                    </div>
                @endif --}}
                <form method="post" action="{{ route('content.storeUpload', $content->path) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="input" class="form-control" id="id_user" name="id_user"
                        value="{{ $content->id_user }}" />
                    <input type="input" class="form-control" id="id_content" name="id_content"
                        value="{{ $content->id_content }}" />
                    {{-- <input type="input" class="form-control" id="id_kategori" name="id_kategori"
                        value="{{ $content->id_kategori }}" />
                    <input type="input" class="form-control" id="nama_budaya_kerja" name="nama_budaya_kerja"
                        value="{{ $content->nama_budaya_kerja }}" /> --}}
                    <input type="input" class="form-control" id="path" name="path" value="{{ $content->path }}" />
                    {{-- 
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Nama Budaya Kerja</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                            value="" disabled>
                    </div>
                </div> --}}
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">SK Tim Penggerak Budaya Kerja</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="file" class="form-control" id="sk_tim" name="sk_tim">
                            @if ($content->sk_tim)
                                <a href="{{ asset('storage/' . $content->sk_tim) }}" target="_blank"><i
                                        data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                    <span class="label">SK-Tim</span></a>
                            @else
                                <i data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                <span class="label">Belum Upload SK-Tim</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Anggaran terkait Budaya Kerja</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="file" class="form-control" id="anggaran" name="anggaran">
                            @if ($content->anggaran)
                                <a href="{{ asset('storage/' . $content->anggaran) }}" target="_blank"><i
                                        data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Anggaran</span></a>
                            @else
                                <i data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                <span class="label">Belum Upload Anggaran</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">SOP Budaya Kerja</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="file" class="form-control" id="sop" name="sop">
                            @if ($content->sop)
                                <a href="{{ asset('storage/' . $content->sop) }}" target="_blank"><i
                                        data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                    <span class="label">SOP Budaya Kerja</span></a>
                            @else
                                <i data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                <span class="label">Belum Upload SOP Budaya Kerja</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Dokumen Pembangunan Budaya Kerja </label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="file" class="form-control" id="dok_pembangunan" name="dok_pembangunan">
                            @if ($content->dok_pembangunan)
                                <a href="{{ asset('storage/' . $content->dok_pembangunan) }}" target="_blank"><i
                                        data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Dokumen Pembangunan Budaya Kerja</span></a>
                            @else
                                <i data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                                <span class="label">Belum Upload Dokumen Pembangunan Budaya Kerja</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row mt-5">
                        <div class="ms-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
