@extends('dashboard._layouts.sidebar')
@section('judul_halaman')
    <h1 class="mb-0 pb-0 display-4" id="title">Content</h1>
    {{-- </div> --}}
@endsection
@section('content')
    <!-- Striped Rows Start -->
    <section class="scroll-section" id="stripedRows">
        {{-- <h2 class="small-title">Striped Rows</h2> --}}
        <div class="card mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="content/create" class="btn btn-primary mb-2">Tambah</a>
                        {{-- ALERT BERHASIL TAMBAH DATA --}}
                        @if (session()->has('success'))
                            <div class="alert alert-success mb-2" role="alert">
                                {{ session('success') }}
                        @endif
                        {{-- ALERT BERHASIL TAMBAH DATA --}}
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Budaya Kerja</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Data Dukung</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($contents as $content)
                        <tbody>
                            <tr>
                                {{-- {{ $i = 1 }} --}}
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $content->nama_budaya_kerja }}</td>
                                <td>{{ $content->kategori->name }}</td>
                                <td><a href="{{ url('content/upload/' . $content->path) }}">Upload</a></td>
                                <td>
                                    {{-- {{ dd($content) }} --}}
                                    {{-- <a href='{{ 'content.edit', $content->id_content }}'  --}}
                                    {{-- <a href='{{ $content->path }}' --}}
                                    <a href='{{ url('/content/' . $content->path) }}'
                                        class="btn btn-sm btn-icon btn-icon-only btn-outline-info"><i
                                            data-acorn-icon="eye"></i></a>
                                    <a href='{{ url('/content/' . $content->path . '/edit/') }}'
                                        class="btn btn-sm btn-icon btn-icon-only btn-outline-warning"><i
                                            data-acorn-icon="edit"></i></a>

                                    <form action='{{ route('content.destroy', $content->path) }}' method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-outline-danger"
                                            data-acorn-icon="bin"></button>
                                        {{-- <a href='{{ route('content.destroy') }}'
                                            class="btn btn-sm btn-icon btn-icon-only btn-outline-danger"><i
                                                data-acorn-icon="bin"></i></a> --}}
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
    <!-- Striped Rows End -->
@endsection
