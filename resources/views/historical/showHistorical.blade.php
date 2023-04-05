@if ( Auth::user() )
    @include('partials.navbarAuth')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Readteracy - Historical genre</title>
        <link rel="stylesheet" href="/css/card.css">
        <link rel="stylesheet" href="/css/buttonGenre.css">
        <link rel="stylesheet" href="/css/dropdown.css">
    </head>

    <body class="bg-black">
        <div class="position-absolute w-100 h-50 bg-black top-0 start-0"></div>
        <div class="position-relative py-vh-5 bg-cover bg-center"
            style="background-image: url(/img/buku1.png)">
            <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow" style="margin-top: 80px;">
                <div class="row d-flex align-items-center">
                    <div class="w-100 overflow-hidden position-relative bg-black text-white">
                        <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
                        <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
                            <div class="row d-flex align-items-center justify-content-center py-vh-5">
                                <div class="col-12 col-xl-10">
                                    <form action="" class="d-flex mb-5" role="search">
                                        <input class="me-3 form-control" type="search" placeholder="Judul Buku"
                                            aria-label="Search">
                                        <button class="btn btn-light" type="submit">Search</button>
                                    </form>
                                </div>
                                <span class="h5 text-secondary fw-bold text-center">Genre</span>
                                <h1 class="display-huge mt-3 mb-3 lh-1">Historical</h1>
                                <div class="col-12 col-xl-8">
                                    <p class="lead text-secondary">
                                        Segala sesuatu yang berhubungan dengan peristiwa, orang,
                                        kebudayaan, dan aspek lain dari masa lampau adalah fakta historis,
                                        ilmu pengetahuan tentang masa lalu, teori, metodologi,
                                        dan penelitian tentang hal-hal yang telah terjadi di masa lalu.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <h1 class="mt-5 text-center text-white">Historical</h1>
                    @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                    @endif
                    <div class="mx-auto text-center">
                        <a href="/Readteracy/historical/addBook" class="btn btn-light">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 w-50 mx-auto">
            @if (session('message'))
                <div class="alert {{ session('alert-class') }}">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <section>
            <div class="container">
                <div class="row">
                    @foreach ( $historicalBook as $book )
                    <div class="col">
                        <div class="book mt-5 mb-5">
                            <div class="row">
                                <div class="col">
                                    <div class="container mx-auto">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h3 class="mt-3 text-center">{{ $book->judul }}</h3>
                                                <p class="mx-3">
                                                    <?php
                                                        $sinopsis = $book["sinopsis"];
                                                        if (strlen($sinopsis) > 20) {
                                                            $sinopsis = Str::substr($sinopsis, 0, 150) . '...';
                                                            echo $sinopsis;
                                                        };
                                                    ?>
                                                </p>
                                                <div class="justify-content-end mx-3">
                                                    <small><a href="/Readteracy/detail/{{ $book->id }}" class="link-fancy link-fancy-black">Read More</a></small>
                                                    <svg width="18" height="18" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 mt-3 d-flex">
                                                @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                                                    <div class="mt-3 mb-3">
                                                        <a href="" class="buttonGenre">Edit</a>
                                                    </div>
                                                    <hr class="">
                                                    <div class="mt-3 mb-3">
                                                        <a href="/Readteracy/genre/Historical/{{ $book->id }}/delete" class="buttonGenre">Hapus</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cover bg" style="background-image: url(/img/buku/{{ $book->image }})">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('partials.footer')
    </body>
    <script src="/js/navbar.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // values from 0 to 3000, with step 50ms
        });
    </script>
    <script>
        let scrollpos = window.scrollY
        const header = document.querySelector(".navbar")
        const header_height = header.offsetHeight

        const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
        const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

        window.addEventListener('scroll', function() {
            scrollpos = window.scrollY;

            if (scrollpos >= header_height) {
                add_class_on_scroll()
            } else {
                remove_class_on_scroll()
            }

            console.log(scrollpos)
        })
    </script>
    </html>

@endif
