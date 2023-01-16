@extends('dashboard._layouts.sidebar')
@section('judul_halaman')
    <h1 class="mb-0 pb-0 display-4" id="title">Proposal</h1>
    {{-- </div> --}}
@endsection
@section('content')
    <!-- Striped Rows Start -->
    <section class="scroll-section" id="pagination">
        <div class="card mb-5">
            <div class="card-body">
                <div class="row">
                    {{-- <div class="col"> --}}
                    {{-- <a href="news/create" class="btn btn-primary mb-2">Tambah</a> --}}
                    {{-- ALERT BERHASIL TAMBAH DATA --}}
                    {{-- ALERT BERHASIL TAMBAH DATA --}}
                    {{-- </div> --}}
                    <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                        <div
                            class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                            <input class="form-control form-control-sm datatable-search" placeholder="Search"
                                data-datatable="#datatablePagination">
                            <span class="search-magnifier-icon">
                                <i data-acorn-icon="search"></i>
                            </span>
                            <span class="search-delete-icon d-none">
                                <i data-acorn-icon="close"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block">
                            <a href="content/create" class="btn btn-icon btn-icon-only btn-outline-muted btn-sm"><i
                                    class="bi-plus icon-10"></i></a>
                            <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                type="button" data-datatable="#datatablePagination">
                                <i data-acorn-icon="print"></i>
                            </button>
                            <div class="d-inline-block datatable-export" data-datatable="#datatablePagination">
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                    <button class="dropdown-item export-copy" type="button">Copy</button>
                                    <button class="dropdown-item export-excel" type="button">Excel</button>
                                    <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                </div>
                            </div>
                            <div class="dropdown-as-select d-inline-block datatable-length"
                                data-datatable="#datatablePagination">
                                <button class="btn btn-outline-muted btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-bs-offset="0,3">
                                    10 Items
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                    <a class="dropdown-item" href="#">5 Items</a>
                                    <a class="dropdown-item active" href="#">10 Items</a>
                                    <a class="dropdown-item" href="#">20 Items</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="data-table data-table-pagination data-table-standard responsive nowrap"
                    id="datatablePagination" data-order='[[ 0, "desc" ]]'>
                    @if (session()->has('success'))
                        <div class="alert alert-success me-1 mb-1 col-md-2" role="alert">
                            {{ session('success') }}
                    @endif
                    <thead>
                        <tr>
                            @if (auth()->user()->id_level == 1)
                                <th class="text-muted text-small text-uppercase">OPD/Kabupaten/Kota</th>
                                <th class="text-muted text-small text-uppercase">Jenis Instansi</th>
                            @endif
                            {{-- <th class="text-muted text-small text-uppercase">Walikota/Bupati/Kepala Dinas</th> --}}
                            <th class="text-muted text-small text-uppercase">Nama Budaya Kerja</th>
                            <th class="text-muted text-small text-uppercase">Kategori</th>
                            @if (auth()->user()->id_level !== 1)
                                <th class="text-muted text-small text-uppercase">Data Dukung</th>
                            @endif
                            <th class="text-muted text-small text-uppercase">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contents as $content)
                            <tr>
                                @if (auth()->user()->id_level == 1)
                                    <td>{{ $content->users->name }}</td>
                                    <td>{{ $content->level->name }}</td>
                                @endif
                                <td class="text-alternate">{{ $content->nama_budaya_kerja }}</td>
                                <td class="text-alternate">{{ $content->kategori->name }}</td>
                                @if (auth()->user()->id_level !== 1)
                                    <td><a href="{{ url('content/upload/' . $content->path) }}">Upload</a></td>
                                @endif
                                <td>
                                    {{-- detail --}}
                                    <button type="button" class="btn btn-sm btn-icon btn-icon-only btn-outline-primary"
                                        data-bs-toggle="modal" data-bs-target="#modal-{{ $content->id_content }}"><i
                                            data-acorn-icon="eye"></i></button>
                                    {{-- <a href='{{ url('/content/' . $content->path) }}'
                                        class="btn btn-sm btn-icon btn-icon-only btn-outline-info"><i data-acorn-icon="eye"
                                            data-toggle="tooltip" data-placement="top" title="Lihat Detail"></i></a> --}}
                                    {{-- edit --}}
                                    <a href='{{ url('/content/' . $content->path . '/edit/') }}'
                                        class="btn btn-sm btn-icon btn-icon-only btn-outline-warning"><i
                                            data-acorn-icon="edit" data-toggle="tooltip" data-placement="top"
                                            title="Edit"></i></a>
                                    {{-- delete --}}
                                    <form action="{{ route('content.destroy', $content->path) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-icon btn-icon-only btn-outline-danger"
                                            onclick="return confirm('Apakah anda yakin untuk menghapus proposal {{ $content->nama_budaya_kerja }} ?')"><i
                                                class="bi-trash icon-12"></i></button>
                                    </form>


                                    {{-- <td class="text-alternate"> <a href='{{ route('users.edit', $content->id_user) }}'
                                    class="btn btn-sm btn-icon btn-icon-only btn-outline-warning"><i
                                    data-acorn-icon="edit" title="Tooltip on left"></i></a>
                                </td> --}}
                            </tr>
                            <div class="modal fade" id="modal-{{ $content->id_content }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $content->nama_budaya_kerja }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('dashboard.content.detail')
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </td>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Striped Rows End -->
@endsection
