@include('partials.navbarAuth')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Readteracy - Add Book Admin / Petugas</title>
    <link rel="stylesheet" href="/css/addForm.css">
    <style>
        .bg {
            background-color: #e8e8e8;
        }
    </style>
</head>

<body class="bg">
    <section class="mb-5 mt-5 py-5">
        <div class="container py-vh-5 mb-5">
            <form action="/Readteracy/historical/addBook/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card mt-5 mx-auto">
                    <a class="crud">Tambah Buku</a>
                    <div class="inputBox1">
                        <input type="text" name="judul" id="judul" required="required">
                        <span class="">Judul</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="sinopsis" id="sinopsis" required="required">
                        <span>Sinopsis</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="nama_penulis" id="nama_penulis" required="required">
                        <span>Nama Penulis</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="genre" id="genre" required="required">
                        <span>Genre</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="tahun_terbit" id="tahun_terbit" required="required">
                        <span>Tahun Terbit</span>
                    </div>


                    <div class="col">
                        <span class="form-text">Image</span>
                        <input type="file" class="form-control mt-2" name="image" id="image" required multiple>
                    </div>

                    <button class="enter" name="addBookHistorical">Enter</button>
                </div>
            </form>
        </div>
    </section>

    @include('partials.footer')
</body>

</html>
