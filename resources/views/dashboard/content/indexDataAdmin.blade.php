@extends('dashboard._layouts.sidebar')
@section('judul_halaman')
    <h4>Slider</h4>
@endsection
@section('content')
    <section class="scroll-section" id="pagination">
        <div class="card mb-5">
            <div class="card-body">
                <div class="row">
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
                        <div class="d-inline-block">
                            <a href="{{ route('slider.create') }}"
                                class="btn btn-icon btn-icon-only btn-outline-muted btn-sm plus"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block">
                            <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                type="button" data-datatable="#datatablePagination">
                                <i data-acorn-icon="print"></i>
                            </button>
                            <div class="d-inline-block datatable-export" data-datatable="#datatablePagination">
                                <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                    data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                    <i data-acorn-icon="download"></i>
                                </button>
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
                    <thead>
                        <tr>
                            <th class="text-muted text-small text-uppercase">No.</th>
                            <th class="text-muted text-small text-uppercase">PD/Kab/Kota</th>
                            <th class="text-muted text-small text-uppercase">Nama Budaya Kerja</th>
                            {{-- <th class="text-muted text-small text-uppercase">Walikota/Bupati/Kepala Dinas</th> --}}
                            <th class="text-muted text-small text-uppercase">SK Tim</th>
                            <th class="text-muted text-small text-uppercase">Anggaran</th>
                            <th class="text-muted text-small text-uppercase">SOP</th>
                            <th class="text-muted text-small text-uppercase">Dokumen Data Dukung Lainnya</th>
                            <th class="text-muted text-small text-uppercase">Dokumen Data Dukung Lainnya 2</th>
                            {{-- <th class="text-muted text-small text-uppercase">Aksi</th> --}}

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($content as $d)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="text-alternate"> {{ $d->users->name }} </td>
                                {{-- <td class="text-alternate">{{ $s->foto_slider }}</td> --}}
                                <td class="text-alternate">{{ $d->nama_budaya_kerja }}</td>
                                <td class="text-alternate">
                                    @if ($d->sk_tim)
                                        <a href="{{ $d->sk_tim }}"
                                            class="btn btn-sm btn-icon btn-icon-only btn-info mb-1" target="_blank"><i
                                                class="bi-download"></i></a>
                                    @else
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-danger mb-1">
                                            <i class="bi-x-circle"></i>
                                        </button>
                                    @endif
                                </td>
                                <td class="text-alternate">
                                    @if ($d->anggaran)
                                        <a href="{{ $d->anggaran }}"
                                            class="btn btn-sm btn-icon btn-icon-only btn-info mb-1" target="_blank"><i
                                                class="bi-download"></i></a>
                                    @else
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-danger mb-1">
                                            <i class="bi-x-circle"></i>
                                        </button>
                                    @endif
                                </td>
                                <td class="text-alternate">
                                    @if ($d->sop)
                                        <a href="{{ $d->sop }}"
                                            class="btn btn-sm btn-icon btn-icon-only btn-info mb-1" target="_blank"><i
                                                class="bi-download"></i></a>
                                    @else
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-danger mb-1">
                                            <i class="bi-x-circle"></i>
                                        </button>
                                    @endif
                                </td>
                                <td class="text-alternate">
                                    @if ($d->data_dukung_1)
                                        <a href="{{ $d->data_dukung_1 }}"
                                            class="btn btn-sm btn-icon btn-icon-only btn-info mb-1" target="_blank"><i
                                                class="bi-download"></i></a>
                                    @else
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-danger mb-1">
                                            <i class="bi-x-circle"></i>
                                        </button>
                                    @endif
                                </td>
                                <td class="text-alternate">
                                    @if ($d->data_dukung_2)
                                        <a href="{{ $d->data_dukung_2 }}"
                                            class="btn btn-sm btn-icon btn-icon-only btn-info mb-1" target="_blank"><i
                                                class="bi-download"></i></a>
                                    @else
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-danger mb-1">
                                            <i class="bi-x-circle"></i>
                                        </button>
                                    @endif
                                </td>

                                {{-- <td class="text-alternate"> <a href='{{ route('slider.edit', $d->id_slider) }}'
                                        class="btn btn-sm btn-icon btn-icon-only btn-outline-warning"><i
                                            data-acorn-icon="edit"></i></a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
