<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>AdminRoom</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="image/logo.jpg" alt="Logo" height="40">
        </a>
        <!-- <a class="navbar-brand" href="index">Familier_INN</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse p-2 " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index">Home <span class="sr-only">index</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="drawing"><b>Drawing</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="painting"><b>Painting</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="photograph"><b>Photograph</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sculptures"><b>Sculptures</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carving"><b>Carving</b></a>
                </li>
            </ul>

        </div>
        <div class="d-flex justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="Adminlogin">Log-out</a>
            </li>
        </div>
    </nav>
    <div class="container">


        <form action="" class="col-9">
            <div class="form-group">
                <input type="search" name="search" id="" class="form-control"
                    placeholder="Search your information clue " />
                {{-- value="{{$search}}" --}}
            </div>
            <button class="btn btn-danger">search</button>
            <a href="admin/admindrawing">
                <button class="btn btn-primary">Reset-Page</button>
            </a>
        </form>

        @foreach ($viewddrawingpublic as $drawing)
            <div class="card" style="width: 60rem; height:140vh; padding: 1rem; margin: 3rem;">
                <div class="card-body">
                    <h5 class="card-title">Painting</h5>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Auction Title:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->auction_title }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Location:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->location }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Auction Date:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->auction_date }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Auction Period:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->auction_period }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Lot Reference Number:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->lot_reference_number }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Lot Number:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->lot_number }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Period/Date of Production:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->dop }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Piece Title:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->piece_title }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Estimate Price</strong>:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->estimate_price }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Dimensions:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->dimension }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Framed:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->framed }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Artist:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->artist }}</p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Lot Description:</strong></p>
                        </div>
                        <div class="col-8">
                            <p>{{ $drawing->lot_description }}</p>
                        </div>
                    </div>
                    {{-- <div>
                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu1W9yFsLBkznEYwvYSLu2tRk1ZJgo3QFbU1bCae_i&s" alt="Card image cap" style="max-width: 100%; height:50vh; padding: 1rem;">
                </div> --}}
                    <div class="col-sm">
                        @if (!empty($drawing->image))
                            <img style="width:87%;"src="{{ asset('storage/images/' . $drawing->image) }}"
                                alt="{{ $drawing->image }}">
                        @else
                            <!-- You can add a placeholder image or alternative content here -->
                            <p>No image available</p>
                        @endif
                    </div>
                </div>

            </div>
        @endforeach





    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    {{--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> --}}
</body>

<style>
    html,
    body {
        height: 100%;
    }

    .page-content {
        min-height: calc(100% - 100px);
        /* Adjust this value if needed */
    }

    .footer {
        height: 100px;
        /* Adjust this value if needed */
    }
</style>

<div class="page-content">
    <!-- Your page content goes here -->
</div>

<!-- Footer -->



</html>
