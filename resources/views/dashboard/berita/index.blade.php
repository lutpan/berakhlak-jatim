@extends('dashboard._layouts.sidebar')
@section('judul_halaman')
    <h1 class="mb-0 pb-0 display-4" id="title">Portal Berita</h1>
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
                        <a href="news/create" class="btn btn-primary mb-2">Tambah</a>
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
                            <th scope="col">Headline</th>
                            <th scope="col">Judul Berita</th>
                            <th scope="col">Path</th>
                            <th scope="col">Tag</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $key => $n)
                            <tr>
                                {{-- {{ $i = 1 }} --}}
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $n->headline_berita }}</td>
                                <td>{{ $n->judul_berita }}</td>
                                <td>{{ $n->path_berita }}</td>
                                <td>{{ $n->tag }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-outline-primary"
                                        data-bs-toggle="modal" data-bs-target="#modal-{{ $n->id_berita }}"><i
                                            data-acorn-icon="eye"></i></button>
                                    {{-- <a href='{{ url('/news/' . $n->path_berita) }}'
                                        class="btn btn-sm btn-icon btn-icon-only btn-outline-info"><i
                                            data-acorn-icon="eye"></i></a> --}}
                                    <a href='{{ route('news.edit', $n->path_berita) }}'
                                        class="btn btn-sm btn-icon btn-icon-only btn-outline-warning"><i
                                            data-acorn-icon="edit"></i></a>
                                    <form action='{{ route('news.destroy', $n->path_berita) }}' method="post"
                                        class="d-inline">
                                        {{-- <form action='{{ url('/news/' . $n->path) }}' method="post" class="d-inline"> --}}
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-icon btn-icon-only btn-outline-danger"
                                            onclick="return confirm('Apakah anda yakin untuk menghapus berita {{ $n->judul_berita }} ?')"><i
                                                class="bi-trash icon-12"></i></button>
                                    </form>

                                    <div class="modal modal-right large fade" id="modal-{{ $n->id_berita }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ $n->judul_berita }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @include('dashboard.berita.detail')
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal -->
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        </div>
    </section>
    <!-- Right Modal End -->
    </div>
    </section>
    <!-- Striped Rows End -->
@endsection
