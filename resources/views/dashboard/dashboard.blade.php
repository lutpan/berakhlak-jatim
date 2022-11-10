@extends('dashboard._layouts.sidebar')
@section('judul_halaman')
    {{-- <div class="col-12 col-md-7"> --}}
    <h1 class="mb-0 pb-0 display-4" id="title">Dashboard</h1>
    {{-- <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb"> --}}
    </nav>
    {{-- </div> --}}
@endsection
@section('content')
    {{-- <div class="card mb-2"> --}}
    {{-- @foreach ($users as $users) --}}
    <div class="card mb-2">
        <div class="card-body h-100">Hai {{ Auth::user()->name }}, Selamat datang di <b>BerAKHLAK</b> Provinsi Jawa Timur.
        </div>
    </div>
    {{-- @endforeach --}}
    {{-- </div> --}}
@endsection
