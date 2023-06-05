@if (Auth::user())
    @include('partials.navbarAuth')
    <link rel="stylesheet" href="/css/aboutUsCard.css">
    <style>
        body {
            background: #292626
        }

        .img {
            height: 300px;
        }
    </style>
    <main class="py-vh-5">
        <div class="container py-vh-5">
            <div class="row" style="margin: 0 0 0 30px;">
                <div class="col mx-auto text-center text-light" data-aos="flip-up" data-aos-duration="10000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-stack" viewBox="0 0 16 16">
                        <path
                            d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
                        <path
                            d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
                    </svg>
                    <span class="ms-md-1 mt-1 fw-bolder fs-1 me-md-5">Readteracy</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://source.unsplash.com/random/1000x400?library,book" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/random/1000x400?book,bookshelf" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/random/1000x400?bookshelf" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container text-light">
            <div class="row">
                <div class="col-sm-11 py-5 mx-auto" data-aos="fade" data-aos-duration="200000">
                    <h2 class="fw-bold text-center">Tentang Kami</h2>
                    <p class="text-left">Readteracy menyewakan buku untuk masyarakat.
                        Dengan memberikan buku yang mereka cari kita dapat memberikan
                        fasilitas membaca tanpa henti dan meningkatkan rasa minat baca warga Indonesia.
                    </p>
                </div>
            </div>
            <div class="row mb-4 mx-4" data-aos="fade-down-right" data-aos-duration="400000">
                <div class="col-sm-5 my-2 mx-5">
                    <img src="/img/aboutLeft.jpg" class="rounded-5 img" alt="">
                </div>
                <div class="col-sm-4 mt-4">
                    <h4 class="">Visi</h4>
                    <p class="">
                        Kami khawatir dengan
                        kondisi minat baca di Indonesia yang
                        memprihatinkan, terletak di posisi 62
                        dari 70 negara, memposisikan kita
                        di 10 negara terbawah yang memiliki
                        tingkat literasi yang rendah.
                    </p>
                </div>
                <div class="row justify-content-end mt-5" data-aos="fade-down-left" data-aos-duration="800000">
                    <div class="col-sm-5">
                        <h4 class="mt-5" style="text-align:right;">Misi</h4>
                        <p class="" style="text-align:right;">Readteracy merupakan langkah selanjutnya dalam proses pinjam-meminjam buku.
                            Dengan Readteracy, anda dapat meminjam buku hanya dalam beberapa klik saja, praktis untuk masyarakat Indonesia yang kurang suka dengan segala suatu yang bersifat rumit.
                        </p>
                    </div>
                    <div class="col-sm-4 my-5">
                        <img src="/img/aboutRight.jpg" class="rounded-5 img" alt="">
                    </div>
                </div>
                <div class="col-sm-11 mx-auto text-left" data-aos="fade-down" data-aos-duration="1900000">
                    <p class="">Readteracy memberikan media pembelajaran yang
                        efisien. Saat para pelajar cenderung mudah bosan dan susah mencari jawaban,
                        maka buku elektornik ini bisa dimanfaatkan sebagai media pembelajaran yang efisien.
                        Dengan buku jenis ini, para pelajar akan lebih tertarik untuk mempelajarinya.
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="fw-bold">Our Team</h2>
                </div>
            </div>
            <div class="row mt-3" >
                <div class="col mb-5" data-aos="fade-up">
                    <article class="card"
                    style="background-image: url('/img/rofi.jpg');
                    background-position: 0px -2em;
                    background-repeat: no-repeat;
                    background-size: cover;">
                        <div class="temporary_text">
                            Programmer-1
                        </div>
                        <div class="card_content">
                            <span class="card_title">Ahmad Sidik Rofiudin</span>
                                <span class="card_subtitle">Programmer - 1202204108</span>
                                <p class="card_description">
                                    Dalam mengembangkan website Readteracy saya membantu mengembangkan website ini
                                    menggunakan framework Laravel. Semoga kedepannya rakyat mampu
                                    meluangkan waktu untuk membaca buku
                                </p>
                        </div>
                    </article>
                </div>
                <div class="col mb-5" data-aos="fade-down">
                    <article class="card"
                    style="background-image: url('/img/najem.jpg');
                    background-position: 0px -5em;
                    background-repeat: no-repeat;
                    background-size: cover;">
                        <div class="temporary_text text-dark">
                            Analyst
                        </div>
                        <div class="card_content">
                            <span class="card_title">Najma Syarifah</span>
                                <span class="card_subtitle">Analyst - 1202200141</span>
                                <p class="card_description">
                                    Saya membantu menganilis kebutuhan fungsional maupun
                                    non-fungsional sistem serta memastikan kualitas sistem yang dibuat
                                    agar sesuai dengan kebutuhan user dan tujuan organisasi
                                </p>
                        </div>
                    </article>
                </div>
                <div class="col mb-5" data-aos="fade-down">
                    <article class="card"
                    style="background-image: url('/img/bli.jpeg');
                    background-position: 0px -5em;
                    background-repeat: no-repeat;
                    background-size: cover;">
                        <div class="temporary_text">
                            Programmer 2
                        </div>
                        <div class="card_content">
                            <span class="card_title">I Kadek Wisnu Kusuma Wardana</span>
                                <span class="card_subtitle">Programmer 2 - 1202200081</span>
                                <p class="card_description">
                                    Dalam mengembangkan website Readteracy saya membantu mengembangkan website ini
                                    menggunakan framework Laravel. Semoga kedepannya rakyat mampu
                                    meluangkan waktu untuk membaca buku
                                </p>
                        </div>
                    </article>
                </div>
                <div class="col mb-5" data-aos="fade-down">
                    <article class="card"
                    style="background-image: url('/img/m.jpg');
                    background-position: 0px -5em;
                    background-repeat: no-repeat;
                    background-size: cover;">
                        <div class="temporary_text">
                            Project Manager
                        </div>
                        <div class="card_content">
                            <span class="card_title">Muhammad Ikhlasul Amalsyah Isa</span>
                                <span class="card_subtitle">Project Manager - 1202200368</span>
                                <p class="card_description">
                                    Project Manager bertanggung jawab atas keberlangsungan proyek
                                    Readteracy Secara keseluruhan dan memegang kendali penuh
                                </p>
                        </div>
                    </article>
                </div>
                <div class="col mb-5" data-aos="fade-down">
                    <article class="card"
                    style="background-image: url('/img/rafsan.jpg');
                    background-position: 0px -5em;
                    background-repeat: no-repeat;
                    background-size: cover;">
                        <div class="temporary_text">
                            Analyst-2
                        </div>
                        <div class="card_content">
                            <span class="card_title">Muhammad Rizki Rafsyandjani</span>
                                <span class="card_subtitle">Analyst-2 - 1202202291</span>
                                <p class="card_description">
                                    Saya membantu menganilis kebutuhan fungsional maupun
                                    non-fungsional sistem serta memastikan kualitas sistem yang dibuat
                                    agar sesuai dengan kebutuhan user dan tujuan organisasi
                                </p>
                        </div>
                    </article>
                </div>
                <div class="col mb-5" data-aos="fade-down">
                    <article class="card"
                    style="background-image: url('/img/cum.jpg');
                    background-position: 0px -5em;
                    background-repeat: no-repeat;
                    background-size: cover;">
                        <div class="temporary_text">
                            Ahli Gambar
                        </div>
                        <div class="card_content">
                            <span class="card_title">Kumara Ris Panji Bagaskara</span>
                                <span class="card_subtitle">Ahli Gambar - 1202204231</span>
                                <p class="card_description">
                                    Bertanggung jawab atas tampilan website Readteracy
                                </p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row mt-5">
                <h2 class="mb-5 fw-bold d-flex justify-content-center">Temukan kami di</h2>
                <div class="col d-flex justify-content-center">
                    <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2973284982336!2d107.62888177388844!3d-6.974204668288945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ae1b842dc1%3A0x280c4668c457364b!2sWarung%20Bu%20Yuyun!5e0!3m2!1sid!2sid!4v1685877576365!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>

@else
    @include('partials.navbarGuest')
    <link rel="stylesheet" href="/css/aboutUsCard.css">
        <style>
        body {
            background: #292626
        }

        .img {
            height: 300px;
        }
    </style>
    <main class="py-vh-5">
        <div class="container py-vh-5">
            <div class="row" style="margin: 0 0 0 30px;">
                <div class="col mx-auto text-center text-light" data-aos="flip-up" data-aos-duration="10000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-stack" viewBox="0 0 16 16">
                        <path
                            d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
                        <path
                            d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
                    </svg>
                    <span class="ms-md-1 mt-1 fw-bolder fs-1 me-md-5">Readteracy</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://source.unsplash.com/random/1000x400?library,book" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/random/1000x400?book,bookshelf" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/random/1000x400?bookshelf" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container text-light">
            <div class="row">
                <div class="col-sm-11 py-5 mx-auto" data-aos="fade" data-aos-duration="200000">
                    <h2 class="fw-bold text-center">Tentang Kami</h2>
                    <p class="text-left">Readteracy menyewakan buku untuk masyarakat.
                        Dengan memberikan buku yang mereka cari kita dapat memberikan
                        fasilitas membaca tanpa henti dan meningkatkan rasa minat baca warga Indonesia.
                    </p>
                </div>
            </div>
            <div class="row mb-4 mx-4" data-aos="fade-down-right" data-aos-duration="400000">
                <div class="col-sm-5 my-2 mx-5">
                    <img src="/img/aboutLeft.jpg" class="rounded-5 img" alt="">
                </div>
                <div class="col-sm-4 mt-4">
                    <h4 class="">Visi</h4>
                    <p class="">
                        Kami khawatir dengan
                        kondisi minat baca di Indonesia yang
                        memprihatinkan, terletak di posisi 62
                        dari 70 negara, memposisikan kita
                        di 10 negara terbawah yang memiliki
                        tingkat literasi yang rendah.
                    </p>
                </div>
                <div class="row justify-content-end mt-5" data-aos="fade-down-left" data-aos-duration="800000">
                    <div class="col-sm-5">
                        <h4 class="mt-5" style="text-align:right;">Misi</h4>
                        <p class="" style="text-align:right;">Readteracy merupakan langkah selanjutnya dalam proses pinjam-meminjam buku.
                            Dengan Readteracy, anda dapat meminjam buku hanya dalam beberapa klik saja, praktis untuk masyarakat Indonesia yang kurang suka dengan segala suatu yang bersifat rumit.
                        </p>
                    </div>
                    <div class="col-sm-4 my-5">
                        <img src="/img/aboutRight.jpg" class="rounded-5 img" alt="">
                    </div>
                </div>
                <div class="col-sm-11 mx-auto text-left" data-aos="fade-down" data-aos-duration="1900000">
                    <p class="">Readteracy memberikan media pembelajaran yang
                        efisien. Saat para pelajar cenderung mudah bosan dan susah mencari jawaban,
                        maka buku elektornik ini bisa dimanfaatkan sebagai media pembelajaran yang efisien.
                        Dengan buku jenis ini, para pelajar akan lebih tertarik untuk mempelajarinya.
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="fw-bold">Our Team</h2>
                </div>
            </div>
            <div class="row mt-3" >
                <div class="col mb-5" data-aos="fade-up">
                    <article class="card">
                        <div class="temporary_text">
                            Programmer-1
                        </div>
                        <div class="card_content">
                            <span class="card_title">Ahmad Sidik Rofiudin</span>
                                <span class="card_subtitle">Programmer - 1202204108</span>
                                <p class="card_description">
                                    Dalam mengembangkan website Readteracy saya membantu mengembangkan website ini
                                    menggunakan framework Laravel. Semoga kedepannya rakyat mampu
                                    meluangkan waktu untuk membaca buku
                                </p>
                        </div>
                    </article>
                </div>
                <div class="col mb-5" data-aos="fade-down">
                    <article class="card">
                        <div class="temporary_text">
                            Programmer-1
                        </div>
                        <div class="card_content">
                            <span class="card_title">Ahmad Sidik Rofiudin</span>
                                <span class="card_subtitle">Programmer - 1202204108</span>
                                <p class="card_description">
                                    Dalam mengembangkan website Readteracy saya membantu mengembangkan website ini
                                    menggunakan framework Laravel. Semoga kedepannya rakyat mampu
                                    meluangkan waktu untuk membaca buku
                                </p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row mt-5">
                <h2 class="mb-5 fw-bold d-flex justify-content-center">Temukan kami di</h2>
                <div class="col d-flex justify-content-center">
                    <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2973284982336!2d107.62888177388844!3d-6.974204668288945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ae1b842dc1%3A0x280c4668c457364b!2sWarung%20Bu%20Yuyun!5e0!3m2!1sid!2sid!4v1685877576365!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>
@endif
