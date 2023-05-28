@extends('partials.navbarAuth')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="/css/detailPage.css">
        <link rel="stylesheet" href="/css/dropdown.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/commentButton.css">
        <link rel="stylesheet" href="/css/comment.css">
        <link rel="stylesheet" href="/css/toastr.css">
        <style>
            .detail-container {
                margin-top: 200px;
            }

            .list-group {
                margin-top: auto;
                margin-bottom: auto;
            }

            .card {
                background-color: rgb(235, 235, 235);
            }
        </style>
    </head>

    <body>
        <div class="detail-container container">
            <div class="card py-vh-3 rounded-5 shadow">
                <div class="card-body">
                    <h3 class="card-title text-center">{{ $isi_buku->judul }}</h3>
                </div>
                <div class="row justify-content-center mx-3">
                    <div class="col-lg-7 col-md-7 col-sm-10 ">
                        {{-- <p id="book-content" class="mx-auto" data-section="section-1">{!! substr($isi_buku->isi_buku, 0, 200) !!}...</p> --}}
                        <span id="additional-content">{!! substr($isi_buku->isi_buku, 0, 200) !!}...</span>
                    </div>
                </div>
                <div class="row mt-3 mx-3">
                    <div class="col-sm-8 col-lg-8 mx-auto">
                        <a href="{{ route('books.getNextPage', $isi_buku->id) }}" class="btn btn-dark text-light w-100" id="continue-btn">Baca bagian selanjutnya</a>
                    </div>
                </div>
                <div class="row mx-3">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };

                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://website-r41nxqdwxx.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>

                </div>
                <div class="row mt-3 mx-3">
                    <div class="col-sm-2 col-lg-8 mx-auto">
                        <form id="comment-form" action="/Readteracy/comment/book/{{ $isi_buku->id }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="book_id" value="{{ $isi_buku->id }}">
                            <div class="input-group">
                                <input type="text" class="form-control rounded-5" name="komentar"
                                    placeholder="Tulis komentar">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-dark rounded-circle" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                            <path
                                                d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/toastr.js"></script>
    </html>
    @endsection

    <script>
        $(document).ready(function () {
            var startPosition = 201;

            function loadNextPage() {
                $.ajax({
                    url: '{{ route('books.getNextPage', $isi_buku->id) }}',
                    method: 'GET',
                    data: { startPosition: startPosition },
                    success: function (response) {
                        $('#additional-content').append('<span>' + response.content + '</span>');
                        startPosition += 200;
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }

            $('#continue-btn').on('click', function (e) {
                e.preventDefault();
                loadNextPage();
            });
        });
    </script>
