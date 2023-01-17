<div class="row">
    <div class="col-12 mb-5">
        <div class="card mb-5">
            <div class="card-body p-0">
                <div class="glide glide-gallery" id="">
                    <div class="glide glide-large">
                        <div class="glide__track" data-glide-el="track">
                            @if ($content->image)
                                <ul class="glide__slides gallery-glide-custom">
                                    <li class="glide__slide p-0">
                                        {{-- <a href="{{ asset('storage/' . $content->image) }}"> --}}
                                        {{-- {{ $y = str_replace('watch?v=', 'embed/', $content->link) }} --}}
                                        {{-- <iframe id="videoGuide"
                                            src="{{ str_replace('watch?v=', 'embed/', $content->link) }}"
                                            class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                        </iframe> --}}
                                        {{-- </a> --}}
                                        @if ($content->image)
                                            <a href="{{ asset($content->image) }}">
                                                <img alt="detail" src="{{ asset($content->image) }}"
                                                    class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                            </a>
                                        @else
                                            <img src="{{ asset('img/logo/logo-jatim.png') }}"
                                                class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                        @endif

                                    </li>
                                </ul>
                            @else
                                <ul class="glide__slides gallery-glide-custom">
                                    <li class="glide__slide p-0">
                                        <a href="{{ asset('/img/logo/logo-berakhlak.png') }}">
                                            <img alt="detail" src="{{ asset('/img/logo/logo-berakhlak.png') }}"
                                                class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100">
                                        </a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    {{-- <h4 class="mb-3">{{ $content->nama_budaya_kerja }}</h4> --}}
                    <div>
                        <h5 class="mb-3 mt-5 text-alternate">Latar Belakang</h5>
                        <p>
                            {!! $content->latar_belakang !!}
                        </p>
                        {{-- <h3>Perubahan yang Ingin Dicapai</h3> --}}
                        <h5 class="mb-3 mt-5 text-alternate">Sasaran</h5>
                        <p>
                            {!! $content->sasaran !!}
                        </p>
                        <h5 class="mb-3 mt-5 text-alternate">Indikator Kinerja</h5>
                        <p>
                            {!! $content->indikator_kinerja !!}
                        </p>
                        <h5 class="mb-3 mt-5 text-alternate">Target</h5>
                        <p>
                            {!! $content->target !!}
                        </p>
                        <h5 class="mb-3 mt-5 text-alternate">Kondisi Sebelum</h5>
                        <p>
                            {!! $content->kondisi_sebelum !!}
                        </p>
                        <h5 class="mb-3 mt-5 text-alternate">Implementasi</h5>
                        <p>
                            {!! $content->implementasi !!}
                        </p>
                        <h5 class="mb-3 mt-5 text-alternate">Kondisi Sesudah</h5>
                        <p>
                            {!! $content->kondisi_sesudah !!}
                        </p>
                        <h5 class="mb-3 mt-5 text-alternate">Kesimpulan</h5>
                        <p>
                            {!! $content->kesimpulan !!}
                        </p>
                        <h5 class="mb-3 mt-5 text-alternate">Video Dokumentasi Budaya Kerja</h5>
                        @if (strpos($content->link, '&'))
                            <iframe width="720" height="480"
                                {{ $variable = substr($content->link, 0, strpos($content->link, '&')) }}
                                src="{{ str_replace('watch?v=', 'embed/', $variable) }}" class="responsive mb-3"
                                allowfullscreen>
                            </iframe>
                        @else
                            <iframe width="720" height="480"
                                src="{{ str_replace('watch?v=', 'embed/', $content->link) }}" class="responsive mb-3"
                                allowfullscreen>
                            </iframe>
                        @endif
                        <div class="card-footer border-0 pt-0">
                            <div class="row align-items-center">

                            </div>
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
                            @if ($content->users->avatar)
                                <img src="{{ asset($content->users->avatar) }}" class="img-fluid rounded-xl">
                            @else
                                <img src="{{ asset('img/logo/logo-jatim.png') }}" class="img-fluid rounded-xl">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <a href="#">{{ $content->users->name }}</a>
                        <div class="text-muted text-small mb-2">{{ $content->users->telfon }}</div>
                        <div class="text-muted text-small mb-2">{{ $content->users->alamat }}</div>
                        <div class="text-muted text-small mb-2">{{ $content->users->email }}</div>
                        <div class="text-medium text-alternate mb-1 clamp-line" data-line="2">
                            {{ $content->users->bio }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card-footer border-0 pt-0">
    </div> --}}
</div>
