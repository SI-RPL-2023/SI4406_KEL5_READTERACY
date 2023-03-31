@extends('partials.navbarAuth')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Readteracy - Proimage Account</title>
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('/plugins/ijabocrop/ijaboCropTool.min.css') }}">
        <style>
            input[readonly] {
                background-color: #f2f2f2;
            }
        </style>
        <link rel="stylesheet" href="/css/dropdown.css">
    </head>

    <body>
        <section class="mt-5" style="background-color: #3f3f3f;">
            <div class="container py-5">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4" data-aos="fade-up">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active fs-2 mx-auto" aria-current="page">Akun Anda</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4" data-aos="zoom-in-right">
                            <form action="/Readteracy/account/{{ Auth::user()->id }}/profile-picture" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body text-center">
                                    @if ( Auth::user()->image == NULL )
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&color=28a745"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px;" id="image_preview">
                                    @else
                                        <img src="/img/profile/{{ Auth::user()->image }}"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height: 150px" id="image_preview">
                                    @endif
                                    <div class="col mt-3">
                                        <label for="image" class="btn btn-dark"><i class="fa-solid fa-upload"></i> Upload</label>
                                        <input type="file" name="image" class="form-control" id="image" style="display: none;">
                                        <button class="btn btn-primary mt-3" name="updatePic">Ubah Gambar</button>
                                        <a class="btn btn-danger mt-3" href="/Readteracy/account/{{ Auth::user()->id }}/delete/profile-picture">Hapus Foto Profile</a>
                                        <hr>
                                        {{-- <input type="file" class="form-control" name="image2" id="image2" style="display: none;">
                                        <a href="javascript:void(0)" class="btn btn-dark btn-block" id="change_pic_btn">Ubah Gambar</a> --}}
                                    </div>
                                    <h5 class="my-3">{{ Auth::user()->name }}</h5>
                                    <p class="text-muted mb-1">
                                        @if (Auth::user()->role == 1)
                                            Admin
                                        @elseif (Auth::user()->role == 2)
                                            Petugas Perpustakaan
                                        @else
                                            Peminjam Buku
                                        @endif
                                    </p>
                                    <p class="text-muted mb-4">{{ Auth::user()->alamat }}</p>
                                </div>
                            </form>

                        </div>
                        <div class="card mb-4 mb-md-0" data-aos="zoom-in-up">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">Mini Library</span>of {{ Auth::user()->name }}</p>
                                <div class="row mb-2">
                                    <p class="mb-1 fw-bold">Kita pergi hari ini</p>
                                    <div class="col-xl-3">
                                        <img src="/img/buku/fiksi1.jpg" width="80px" alt="">
                                    </div>
                                    <div class="col-xl-9">
                                        <?php
                                            $sinopsis = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates vitae";
                                            if (strlen($sinopsis) > 10) {
                                                $sinopsis = Str::substr($sinopsis, 0, 50) . '...';
                                                echo $sinopsis;
                                            };
                                        ?>
                                    </div>
                                </div>
                                <hr>

                                <div class="row mb-2">
                                    <p class="mb-1 fw-bold">Kita pergi hari ini</p>
                                    <div class="col-xl-3">
                                        <img src="/img/buku/fiksi1.jpg" width="80px" alt="">
                                    </div>
                                    <div class="col-xl-9">
                                        <?php
                                            $sinopsis = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates vitae";
                                            if (strlen($sinopsis) > 10) {
                                                $sinopsis = Str::substr($sinopsis, 0, 50) . '...';
                                                echo $sinopsis;
                                            };
                                        ?>
                                    </div>
                                </div>
                                <hr>

                                <div class="row mb-2">
                                    <p class="mb-1 fw-bold">Kita pergi hari ini</p>
                                    <div class="col-xl-3">
                                        <img src="/img/buku/fiksi1.jpg" width="80px" alt="">
                                    </div>
                                    <div class="col-xl-9">
                                        <?php
                                            $sinopsis = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates vitae";
                                            if (strlen($sinopsis) > 10) {
                                                $sinopsis = Str::substr($sinopsis, 0, 50) . '...';
                                                echo $sinopsis;
                                            };
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8" data-aos="zoom-in-left">
                        <div class="card mb-4">
                            <form action="/Readteracy/account/update" method="post">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Name</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" id="nameInput" type="text" value="{{ Auth::user()->name }}" name="name" readonly>
                                        </div>
                                        <div class="col offset-sm-3">
                                            <a class="btn btn-dark" id="nameButton"><i class="fa-solid fa-pen-to-square"></i></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" id="emailInput" type="text"
                                                value="{{ Auth::user()->email }}" readonly>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Mobile</p>
                                        </div>
                                        <div class="col-sm-4">
                                            @if (Auth::user()->no_hp === null)
                                                <input class="form-control" id="no_hpInput" type="text" value="No hp tidak tercantum" name="no_hp" readonly>
                                            @else
                                                <input class="form-control" id="no_hpInput" type="text" value="{{ Auth::user()->no_hp }}" name="no_hp" readonly>
                                            @endif
                                        </div>
                                        <div class="col offset-sm-3">
                                            <a class="btn btn-dark" id="no_hpButton"><i class="fa-solid fa-pen-to-square"></i></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-4">
                                            @if (Auth::user()->alamat == null)
                                                <input class="form-control" id="alamatInput" type="text" value="Belum memiliki alamat" name="alamat" readonly>
                                            @else
                                                <input class="form-control" id="alamatInput" type="text" value="{{ Auth::user()->alamat }}" name="alamat" readonly>
                                            @endif
                                        </div>
                                        <div class="col offset-sm-3">
                                            <a class="btn btn-dark" id="alamatButton"><i class="fa-solid fa-pen-to-square"></i></a>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <button type="submit" name="updateProfile" class="btn btn-dark">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
            crossorigin="anonymous"></script>
        <script src="/js/profile.js"></script>
        <script src="/js/aos.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/plugins/ijabocrop/ijaboCropTool.min.js"></script>
        <script>
            AOS.init({
                duration: 800, // values from 0 to 3000, with step 50ms
            });
        </script>

        <script>
            $(document).on('click', '#change_pic_btn', function() {
                $('#image').click();
            });
        </script>

        {{-- <script>
            $('#image').ijaboCropTool({
            preview : '',
            setRatio:1,
            allowedExtensions: ['jpg', 'jpeg','png'],
            buttonsText:['CROP','QUIT'],
            buttonsColor:['#30bf7d','#ee5155', -15],
            processUrl:'{{ route("updateProfilePicture") }}',
            // withCSRF:['_token','{{ csrf_token() }}'],
            onSuccess:function(message, element, status){
                alert(message);
            },
            onError:function(message, element, status){
                alert(message);
            }
            });
        </script> --}}
    </body>

    </html>
@endsection
