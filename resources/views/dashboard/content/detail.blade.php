@extends('dashboard._layouts.sidebar')
@section('judul_halaman')
    <h1 class="mb-0 pb-0 display-4" id="title">{{ $content->nama_budaya_kerja }}</h1>
    {{-- </div> --}}
@endsection
@section('content')
    {{-- {{ $content->first()->image }} --}}
    <!-- Striped Rows Start -->
    <div class="row">
        <div class="col-12 col-xl-8 col-xxl-9 mb-5">
            <div class="card mb-5">
                <div class="card-body p-0">
                    <div class="glide glide-gallery" id="glideBlogDetail">
                        <div class="glide glide-large">
                            <div class="glide__track" data-glide-el="track">
                                @if ($content->image)
                                    <ul class="glide__slides gallery-glide-custom">
                                        <li class="glide__slide p-0">
                                            @if ($content->image)
                                                <a href="{{ asset('storage/' . $content->image) }}">
                                                    <img alt="detail" src="{{ asset('storage/' . $content->image) }}"
                                                        class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                                </a>
                                            @else
                                                <a href="/img/logo/logo-jatim.png">
                                                    <img alt="detail" src="/img/logo/logo-jatim.png"
                                                        class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                            @endif
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="img/product/large/product-2.webp">
                                                <img alt="detail" src="img/product/large/product-2.webp"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                            </a>
                                        </li>
                                    </ul>
                                @else
                                    <ul class="glide__slides gallery-glide-custom">
                                        <li class="glide__slide p-0">
                                            <a href="img/product/large/product-1.webp">
                                                <img alt="detail" src="img/product/large/product-1.webp"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                            </a>
                                        </li>
                                        <li class="glide__slide p-0">
                                            <a href="img/product/large/product-2.webp">
                                                <img alt="detail" src="img/product/large/product-2.webp"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                            </a>
                                        </li>
                                    </ul>
                                @endif

                            </div>
                        </div>
                        {{-- <div class="glide glide-thumb mb-3">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide p-0">
                                        <img alt="thumb" src="img/product/small/product-1.webp"
                                            class="responsive rounded-md img-fluid">
                                    </li>
                                    <li class="glide__slide p-0">
                                        <img alt="thumb" src="img/product/small/product-2.webp"
                                            class="responsive rounded-md img-fluid">
                                    </li>
                                    <li class="glide__slide p-0">
                                        <img alt="thumb" src="img/product/small/product-3.webp"
                                            class="responsive rounded-md img-fluid">
                                    </li>
                                    <li class="glide__slide p-0">
                                        <img alt="thumb" src="img/product/small/product-4.webp"
                                            class="responsive rounded-md img-fluid">
                                    </li>
                                    <li class="glide__slide p-0">
                                        <img alt="thumb" src="img/product/small/product-5.webp"
                                            class="responsive rounded-md img-fluid">
                                    </li>
                                    <li class="glide__slide p-0">
                                        <img alt="thumb" src="img/product/small/product-6.webp"
                                            class="responsive rounded-md img-fluid">
                                    </li>
                                </ul>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="btn btn-icon btn-icon-only btn-foreground hover-outline left-arrow"
                                    data-glide-dir="<">
                                    <i data-acorn-icon="chevron-left"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-only btn-foreground hover-outline right-arrow"
                                    data-glide-dir=">">
                                    <i data-acorn-icon="chevron-right"></i>
                                </button>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-body pt-0">
                        <h4 class="mb-3">{{ $content->nama_budaya_kerja }}</h4>
                        <div>
                            <h6 class="mb-3 mt-5 text-alternate">Latar Belakang</h6>
                            <p>
                                {{ $content->latar_belakang }}
                            </p>
                            <h6 class="mb-3 mt-5 text-alternate">Tujuan</h6>
                            <p>
                                {{ $content->tujuan }}
                            </p>
                            <h6 class="mb-3 mt-5 text-alternate">Sasaran</h6>
                            <p>
                                {{ $content->sasaran }}
                            </p>
                            <h6 class="mb-3 mt-5 text-alternate">Kondisi Sebelum</h6>
                            <p>
                                {{ $content->kondisi_sebelum }}
                            </p>
                            <h6 class="mb-3 mt-5 text-alternate">Implementasi</h6>
                            <p>
                                {{ $content->implementasi }}
                            </p>
                            <h6 class="mb-3 mt-5 text-alternate">Kondisi Sesudah</h6>
                            <p>
                                {{ $content->kondisi_sesudah }}
                            </p>
                            <h6 class="mb-3 mt-5 text-alternate">Manfaat</h6>
                            <p>
                                {{ $content->manfaat }}
                            </p>
                            <h6 class="mb-3 mt-5 text-alternate">Peran Pimpinan</h6>
                            <p>
                                {{ $content->peran_pimpinan }}
                            </p>
                            <h6 class="mb-3 mt-5 text-alternate">Monitoring & Evaluasi</h6>
                            <p>
                                {{ $content->monev }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="row align-items-center">
                        <div class="col-6 text-muted">
                            <div class="row g-0">
                                <div class="col-auto pe-3">
                                    <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                                    <span class="align-middle">421</span>
                                </div>
                                <div class="col">
                                    <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                                    <span class="align-middle">4</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-end">
                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1" type="button">
                                    <i data-acorn-icon="facebook"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1" type="button">
                                    <i data-acorn-icon="twitter"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Striped Rows End -->
            <h2 class="small-title">Instansi Pembuat Budaya Kerja</h2>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-auto">
                            <div class="sw-5 me-3">
                                <img src="{{ asset('storage/' . $content->user->avatar) }}" class="img-fluid rounded-xl"
                                    alt="thumb">
                            </div>
                        </div>
                        <div class="col">
                            <a href="#">{{ $content->user->name }}</a>
                            <div class="text-muted text-small mb-2">{{ $content->user->telfon }}</div>
                            <div class="text-muted text-small mb-2">{{ $content->user->alamat }}</div>
                            <div class="text-muted text-small mb-2">{{ $content->user->email }}</div>
                            <div class="text-medium text-alternate mb-1 clamp-line" data-line="2">
                                {{ $content->user->bio }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
