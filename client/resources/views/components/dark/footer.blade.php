<footer class="mastfoot mb-3 bg-dark-custom py-4 border-top text-white border-0">
    <div class="inner container">
        <div class="row">
            <a id="soc"></a>
            <div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
                <a href="{{ route('home', ['dm' => 0]) }}" id="modeToggle" class="nav-link pr-3">
                    <!-- SVG -->
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20.000000pt" height="20.000000pt"
                        viewBox="0 0 50.000000 50.000000" preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)" fill="#f15e75"
                            stroke="none">
                            <path d="M190 445 c0 -19 5 -35 10 -35 6 0 10 16 10 35 0 19 -4 35 -10 35 -5
0 -10 -16 -10 -35z" />
                            <path d="M240 255 c-118 -118 -211 -218 -207 -222 8 -7 437 415 437 429 0 5
-3 8 -8 8 -4 0 -104 -97 -222 -215z" />
                            <path d="M70 422 c0 -14 39 -46 47 -39 3 4 -2 16 -12 27 -19 21 -35 26 -35 12z" />
                            <path d="M295 410 c-10 -11 -15 -23 -12 -27 8 -7 47 25 47 39 0 14 -16 9 -35
-12z" />
                            <path d="M139 361 c-19 -19 -29 -40 -29 -59 0 -32 33 -82 46 -70 4 5 0 16 -9
26 -24 26 -21 65 6 90 28 26 64 28 89 5 10 -9 21 -13 26 -9 12 13 -38 46 -70
46 -19 0 -40 -10 -59 -29z" />
                            <path d="M432 324 c-11 -12 -10 -17 2 -30 15 -14 17 -14 32 0 14 14 14 18 0
31 -18 18 -18 18 -34 -1z" />
                            <path d="M20 300 c0 -5 16 -10 35 -10 19 0 35 5 35 10 0 6 -16 10 -35 10 -19
0 -35 -4 -35 -10z" />
                            <path d="M304 216 c-26 -26 -34 -42 -34 -71 0 -29 8 -45 34 -71 26 -26 42 -34
71 -34 46 0 105 53 105 94 0 29 -11 33 -30 11 -7 -8 -22 -15 -35 -15 -45 0
-73 63 -40 90 22 19 18 30 -11 30 -16 0 -39 -13 -60 -34z m38 -25 c-6 -42 37
-85 79 -79 36 6 37 -4 3 -31 -37 -29 -70 -26 -105 8 -34 35 -37 68 -8 105 27
34 37 33 31 -3z" />
                            <path d="M85 200 c-10 -11 -15 -23 -12 -27 8 -7 47 25 47 39 0 14 -16 9 -35
-12z" />
                            <path d="M202 64 c-11 -12 -10 -17 2 -30 15 -14 17 -14 32 0 14 14 14 18 0 31
-18 18 -18 18 -34 -1z" />
                        </g>
                    </svg>
                </a>
                <div class="pt-3">
                    <p class="mb-0">{!! $metas['Footer'] !!}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <nav class="nav nav-mastfoot justify-content-md-end justify-content-center">
                    @foreach ($socMedias as $sm)
                        <a class="nav-link" href="{{ $sm->acf->url }}" title="{{ $sm->title->rendered }}"
                            target="_blank">
                            <i class="{{ $sm->acf->icon }}"></i>
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>
</footer>