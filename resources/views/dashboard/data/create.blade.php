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
                {{-- <form method="post" action="{{ route('storeUpload' . $data->id_content) }}" enctype="multipart/form-data"> --}}
                @csrf
                <input type="input" class="form-control" id="id_user" name="id_user" value="{{ $content->id_user }}" />
                <input type="input" class="form-control" id="id_content" name="id_content"
                    value="{{ $content->id_content }}" />
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
                        <input type="file" class="form-control" id="sk-tim" name="sk-tim">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Anggaran terkait Budaya Kerja</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="file" class="form-control" id="anggaran" name="anggaran">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">SOP Budaya Kerja</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="file" class="form-control" id="sop" name="sop">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Dokumen Pembangunan Budaya Kerja </label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="file" class="form-control" id="dok-pembangunan" name="dok-pembangunan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Link Video yang telah di upload di
                        youtube</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="file" class="form-control" id="link" name="link">
                    </div>
                </div>
                <div class="mb-3 row mt-5">
                    <div class="ms-auto">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection
