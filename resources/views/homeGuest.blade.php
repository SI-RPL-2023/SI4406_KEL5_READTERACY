@extends('partials.navbarGuest')

@section('content')
    <!DOCTYPE html>
    <html class="h-100" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon.png">
        <title>Readteracy - Sewa Buku</title>
        <link rel="stylesheet" href="/css/theme.min.css">

        <style>
            /* inter-300 - latin */
            @font-face {
                font-family: 'Inter';
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: local(''),
                    url('/fonts/inter-v12-latin-300.woff2') format('woff2'),
                    url('/fonts/inter-v12-latin-300.woff') format('woff');
            }

            /* inter-400 - latin */
            @font-face {
                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: local(''),
                    url('/fonts/inter-v12-latin-regular.woff2') format('woff2'),
                    url('/fonts/inter-v12-latin-regular.woff') format('woff');
            }

            @font-face {
                font-family: 'Inter';
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: local(''),
                    url('/fonts/inter-v12-latin-500.woff2') format('woff2'),
                    url('/fonts/inter-v12-latin-500.woff') format('woff');
            }

            @font-face {
                font-family: 'Inter';
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: local(''),
                    url('/fonts/inter-v12-latin-700.woff2') format('woff2'),
                    url('/fonts/inter-v12-latin-700.woff') format('woff');
            }
        </style>
    </head>
    <body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">
        <main>
            <div class="position-absolute w-100 h-50 bg-black top-0 start-0" data-aos="fade"></div>
            <div class="position-relative py-vh-5 bg-cover bg-center" style="background-image: url(/img/buku1.png)">
                <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow" style="margin-top: 80px;">
                    <div class="row d-flex align-items-center">
                        <div class="w-100 overflow-hidden position-relative bg-black text-white" data-aos="fade">
                            <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
                            <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
                                <div class="row d-flex align-items-center justify-content-center py-vh-5">
                                    <div class="col-12 col-xl-10">
                                        <form action="" class="d-flex mb-5" role="search">
                                            <input class="me-3 form-control" type="search" placeholder="Judul Buku"
                                                aria-label="Search">
                                            <button class="btn btn-light" type="submit">Search</button>
                                        </form>
                                        <span class="h5 text-secondary fw-bold text-center">Our Mission</span>
                                        <h1 class="display-huge mt-3 mb-3 lh-1">Kita menyewakan buku untuk masyarakat</h1>
                                    </div>
                                    <div class="col-12 col-xl-8">
                                        <p class="lead text-secondary">Dengan memberikan buku yang mereka cari kita dapat
                                            memberikan fasilitas membaca tanpa henti dan mengurangi rasa minat baca
                                            warga indonesia
                                        </p>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="/account/register" class="btn btn-xl btn-light">Join us
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 position-relative bg-black text-white bg-cover d-flex align-items-center mt-5">
                <div class="container-fluid px-vw-5">
                    <div class="position-absolute w-100 h-50 bg-dark bottom-0 start-0"></div>
                    <div class="row d-flex align-items-center position-relative justify-content-center px-0 g-5">
                        <div class="col-12 col-lg-6">
                            <img src="img/buku1.png" width="2280" height="1732" alt="abstract image"
                                class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <img src="/img/buku2.png" width="1116" height="1578" alt="abstract image"
                                class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up"
                                data-aos-duration="2000">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <img src="/img/buku3.png" width="1116" height="848" alt="abstract image"
                                class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up"
                                data-aos-duration="3000">
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
    </html>

@endsection
