@extends('partials.navbarAuth')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
        {{-- <link rel="stylesheet" href="/css/theme.min.css"> --}}
        <style>
            div.dataTables_wrapper  {
                width: 1070px;
                margin: 0 auto;
            }
        </style>
    </head>

    <body class="bg-light">
        <div class="position-absolute w-100 h-50 bg-light top-0 start-0"></div>
        <div class="position-relative py-vh-5 bg-cover bg-center">
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <h1 class="mt-5 text-center text-dark">Data Peminjam Buku</h1>
                </div>
            </div>
        </div>
        <section>
            <div class="container mt-5 dataTables_wrapper">
                <table id="dataPeminjaman" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            {{-- <th>No</th> --}}
                            <th>Nama Peminjam</th>
                            <th>Judul</th>
                            <th>No Hp</th>
                            <th>Tanggal Sewa</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Actual Return</th>
                            <th>Tipe</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </section>
    </body>
