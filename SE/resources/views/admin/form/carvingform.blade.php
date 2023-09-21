<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Lifestyle</title>
    <style>
        /* Custom styles can be added here */
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light d-flex" style="background-color: #9ea7a4">

        {{-- <div class="mr-auto p-2">
            <a class="navbar-brand" href="index">Familier_INN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div> --}}
        {{-- <img src="/image/1.jpg" alt=""> --}}


        <div class="collapse navbar-collapse p-2 " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="../adminbooking">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../adminabout">Queries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../adminroom"><b>Room-Booking</b> <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Explore
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../admindestination">Destination</a>
                        <a class="dropdown-item" href="../adminfood">Food</a>
                        <a class="dropdown-item" href="../adminlifestyle">Lifestyles</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link text-danger" href="login"><b>Log-Out</b> <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item custom-red-text">
                    <a class="nav-link text-success" href="register"><b>Register</b> <span
                            class="sr-only">(current)</span></a>
                </li> --}}

            </ul>

        </div>
        <div class="d-flex justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="../Adminlogin">Log-out</a>
            </li>
        </div>
    </nav>

    <div class="w-30%">
        <div class="d-flex flex-row-reverse w-30%">
            <div class="container mt-5">
                <h1>Carving Management</h1>
                {{-- <form method="post" action="{{ $urlroom }}" class="container" enctype="multipart/form-data"> --}}
                <form method="post" action="{{ $urlcarving }}" class="container">
                    @csrf
                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Auction Title:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="string" class="form-control" name="auction_title" id=""
                                placeholder="Enter Auction Title">
                        </div>
                    </div>

                    {{--  --}}


                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Location:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="location" id=""
                                placeholder="Enter Location">
                        </div>
                    </div>

                    {{--  --}}


                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Auction Date:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="date" class="form-control" name="auction_date" id="">
                        </div>
                    </div>

                    {{--  --}}


                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Auction Period:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="auction_period" id=""
                                placeholder="Enter Auction Period">
                        </div>
                    </div>

                    {{--  --}}



                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Lot_Reference_Number:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" name="lot_reference_number" id=""
                                placeholder="Enter Lot Reference Number:">
                        </div>
                    </div>

                    {{--  --}}

                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Lot_Number:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" name="lot_number" id=""
                                placeholder="Enter Lot_Number">
                        </div>
                    </div>

                    {{--  --}}

                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Date_Of_Production : </strong></p>
                        </div>
                        <div class="col-8">
                            <input type="date" class="form-control" name="dop" id="">
                        </div>
                    </div>

                    {{--  --}}

                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Piece Title</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="piece_title" id=""
                                placeholder="Enter piece_title">
                        </div>
                    </div>

                    {{--  --}}

                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Estimate_Price:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" name="estimate_price" id=""
                                placeholder="Enter Estimate_Price ">
                        </div>
                    </div>

                    {{--  --}}

                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Dimensions:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" name="dimension" id=""
                                placeholder="Enter dimensions">
                        </div>
                    </div>

                    {{--  --}}

                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Framed:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="framed" id=""
                                placeholder="Enter framed">
                        </div>
                    </div>

                    {{--  --}}

                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Artist:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="string" class="form-control" name="artist" id=""
                                placeholder="Enter artist">
                        </div>
                    </div>

                    {{--  --}}

                    <div class="row p-1">
                        <div class="col-4" style="background-color: gray;">
                            <p><strong>Lot_Description:</strong></p>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="lot_description" id=""
                                placeholder="Enter Lot_Description">
                        </div>
                    </div>

                    {{--  --}}

                   
                    <!-- Submit button -->
                    <div class="row p-1">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
    </div>







</body>

</html>
