<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>AdminPainting</title>
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
                    <a class="nav-link" href="admindrawing"><b>Drawing</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminpainting"><b>Painting</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminphotograph"><b>AdminPhotograph</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminsculptures"><b>Admin-Sculptures</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admincarving"><b>Admin-Carving</b></a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="adminroom"><b>Room-Booking</b> <span class="sr-only">(current)</span></a>
                </li> --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Explore
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="admindestination">Destination</a>
                        <a class="dropdown-item" href="adminfood">Food</a>
                        <a class="dropdown-item" href="adminlifestyle">Lifestyles</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>  --}}




            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
        <div class="d-flex justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="Adminlogin">Log-out</a>
            </li>
        </div>
    </nav>
    <div class="container">
        <!-- <div class="col-md-12 text-center my-3 text-info text-secondary">
            <h1 class="centered-heading"><b>Catalog , ADD , EDIT AND DELETE:</b></h1>
        </div> -->
        <!-- <form action="" class="col-9">
            <div class="form-group">
                <input type="search" name="search" id="" class="form-control" placeholder="Search by name "  />
                {{-- value="{{$search}}" --}}
            </div>
            <button class="btn btn-danger">search</button>
        </form> -->
        <!-- <div class="col-sm">
            <div class="card-body">
                <a href="" class="btn btn-primary bg-purple">ADD-ROOM</a>
                {{-- {{ route('create.room') }} --}}
            </div>
        </div> -->
        <div class="col-sm">
            <div class="card-body">
                <a href="{{ route('create.painting') }}" href="" class="btn btn-primary bg-purple">ADD</a>
                {{-- <a href="{{route('admin.create')}}" href="" class="btn btn-primary bg-purple">ADD</a> --}}
            </div>
        </div>

        <form action="" class="col-9">
            <div class="form-group">
                <input type="search" name="search" id="" class="form-control"
                    placeholder="Search your information clue " />
                {{-- value="{{$search}}" --}}
            </div>
            <button class="btn btn-danger">search</button>
            <a href="admin/adminpainting">
                <button class="btn btn-primary">Reset-Page</button>
            </a>
        </form>

        @foreach ($postpainting as $adminpainting)
        

        <div class="card" style="width: 60rem; height:140vh; padding: 1rem; margin: 3rem;">
            <div class="card-body">
                <h5 class="card-title">Painting</h5>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Auction Title:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->auction_title}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Location:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->location}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Auction Date:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->auction_date}}</p>
                    </div>
                </div>
                <div class="row p-1" >
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Auction Period:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->auction_period}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Lot Reference Number:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->lot_reference_number}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Lot Number:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->lot_number}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Period/Date of Production:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->dop}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Piece Title:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->piece_title}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Estimate Price</strong>:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->estimate_price}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Dimensions:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->dimension}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Framed:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->framed}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Artist:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->artist}}</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4" style="background-color: gray;">
                        <p><strong>Lot Description:</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{$adminpainting->lot_description}}</p>
                    </div>
                </div>
            </div>
            
            
            <div>
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu1W9yFsLBkznEYwvYSLu2tRk1ZJgo3QFbU1bCae_i&s" alt="Card image cap" style="max-width: 100%; height:50vh; padding: 1rem;">
            </div>

            <div class="col-sm">
                <div class="card-body">
                    {{-- url('/admin/delete')}}/{{$value->lifestyle_id --}}

                    <a href="{{route('painting.delete',['paintingid'=>$adminpainting->painting_id])}}" class="btn btn-primary bg-purple">Delete</a>
                    <a href="{{route('painting.edit',['paintingid'=>$adminpainting->painting_id])}}" class="btn btn-primary bg-purple">edit</a>
                    

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